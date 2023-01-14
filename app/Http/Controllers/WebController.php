<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('home');
    }

    public function mycart(){
        return view('mycart');
    }

    public function viewpro(){
        return view('viewproduct');
    }
}
