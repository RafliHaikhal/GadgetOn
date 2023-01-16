<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();
        $products = Product::all()->find($request->id);

        return view('product.viewproduct', compact('products','user'));
    }

    public function search(Request $request){
        $query = $request->search;

        if($query != null){
            $products = Product::where('name', 'like', '%'.$query.'%')->orWhere('description', 'like', '%'.$query.'%')
                ->paginate(6)->withQueryString();

            return view('home', compact('products', 'query'));
        }

        return redirect()->route('index');
    }

    public function add_page(){
        $user = Auth::user();
        return view('product.addproduct', compact('user'));
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required | min:8',
            'description' => 'required | between:10,500',
            'price' => 'required | numeric | between:1, 999999999999',
            'year' => 'required | numeric',
            'image' => 'required'
        ]);

        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/assets/', $file, $imageName);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->year = $request->input('year');
        $product->image = $imageName;

        $product->save();
        return redirect()->route('index')->with('alert', 'Product success to added');
    }

    public function edit(Request $request){
        $user = Auth::user();
        $product = Product::find($request->id);

        return view('product.editproduct', compact('product', 'user'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required | min:8',
            'description' => 'required | between:10,500',
            'price' => 'required | numeric | between:1, 999999999999',
            'year' => 'required | numeric'
        ]);

        $product = Product::all()->find($request->id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->year = $request->input('year');

        $file = $request->file('image');
        if ($file != null){
            Storage::delete('public/assets/'.$product->image);

            $imageName = time().'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('public/assets/', $file, $imageName);
            $product->image = $imageName;
        }

        $product->save();
        return redirect()->route('index')->with('alert', 'Product successful updated.');
    }

    public function delete(Request $request){
        $product = Product::find($request->id);
        Storage::delete('public/assets/'.$product->image);
        Product::destroy($request->id);

        return redirect()->route('index')->with('alert', 'Product successful deleted.');
    }
}
