<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WebController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function home(){
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function mycart(){
        return view('mycart');
    }

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
}
