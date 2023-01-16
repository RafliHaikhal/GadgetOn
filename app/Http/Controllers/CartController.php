<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->first();

        if ($cart == null){
            return view('cart.mycart', compact('user'));
        }

        $cartProducts = CartDetail::where('cart_id', $cart->id)->get();

        if (count($cartProducts) == 0){
            $cart->delete();
            return view('cart.mycart');
        }

        return view('cart.mycart', compact('cartProducts', 'user'));
    }

    public function add(Request $request){
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->first();

        if ($cart == null){
            $cart = new Cart();
            $cart->user_id = $user->id;

            $cart->save();
        }

        $product = Product::find($request->id);
        $cartProduct = CartDetail::where('product_id', $product->id)->where('cart_id', $cart->id)->first();

        if ($cartProduct == null){
            $cartProduct = new CartDetail();
            $cartProduct->cart_id = $cart->id;
            $cartProduct->product_id = $product->id;
            $cartProduct->quantity = $request->input('quantity');
        }
        elseif ($cartProduct->quantity + 1){
            $cartProduct->quantity++;
        }

        $cartProduct->save();

        return redirect()->route('index')->with('alert', 'Product added to cart.');
    }

    public function update(Request $request){
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->first();

        $product = Product::find($request->id);
        $request->validate([
           'quantity' => 'required|numeric'
        ]);

        $cartProduct = CartDetail::where('product_id', $product->id)->where('cart_id', $cart->id)->first();

        if ($request->quantity <= 0){
            $cartProduct->delete();
        }
        else{
            $cartProduct->quantity = $request->quantity;
            $cartProduct->save();
        }

        return redirect()->back()->with('alert', 'Cart Updated.');
    }
}
