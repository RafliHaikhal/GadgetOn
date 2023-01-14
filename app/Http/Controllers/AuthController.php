<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(Request $request)
    {
        $email = $request->cookie('user_email');
        return view('login', compact('email'));
    }

    public function store(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($credential, $request->remember)) {
            return redirect()->back()->withErrors('Invalid email or password!');
        }

        if ($request->has('remember')) {
            $exp_time = 60*24*365*5;
            Cookie::queue("user_email", $request->email, $exp_time);
        }
        return redirect()->route('/home');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect()->route('/home');
    }
}
