<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WebController extends Controller
{
    public function index(){
        $user = Auth::user();
        $products = Product::paginate(6);

        return view('home', compact('user','products'));
    }

<<<<<<< HEAD
=======
    public function mycart(){
        return view('cart.mycart');
    }

>>>>>>> 497e314ab21fa8040c31bebaeadb36e75aeca710
    public function viewpro(){
        return view('viewproduct');
    }

    public function editpro(){
        return view('editproduct');
    }

    public function editproqty(){
        return view('editproductcart');
    }

    public function transactionhistory(){
        return view('transactionhistory');
    }

    public function addproduct(){
        return view('addproduct');
    }

    public function manageproduct(){
        return view('manageproduct');
    }
}
