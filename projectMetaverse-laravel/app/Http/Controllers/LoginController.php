<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() //method dari web.php
    {
        return view('login.index', [         //di dalam view folder login -> index
            'title' => 'Login',
            'active' => 'login'
        ]);  
    }

    public function authenticate(Request $request) //method dari web.php
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();  //regenerate sistem keamanan dari laravel
            return redirect()->intended('/Home');    //masuk ke laman selanjutnya berhasil login
        }

       return back()->with('loginError', 'Login failed!');  //notification flash
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}