<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login(){
        return view('login');
    }

<<<<<<< HEAD
    public function register(){
        return view('register');
=======
    public function home(){
        return view('home');
    }

    public function mycart(){
        return view('mycart');
    }

    public function viewpro(){
        return view('viewproduct');
>>>>>>> 3576b785f3c1886c4321fe07e7a0c68fbe8b436e
    }
}
