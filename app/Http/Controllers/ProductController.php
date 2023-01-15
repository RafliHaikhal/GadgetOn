<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();
        $product = Product::all()->find($request->id);

        return view('product.viewproduct', compact('product','user'));
    }
}
