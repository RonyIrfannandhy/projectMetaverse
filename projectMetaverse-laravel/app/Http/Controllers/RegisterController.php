<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() //method dari web.php
    {  
        return view('register.index', [         //di dalam view folder register -> index
            'title' => 'Register',
            'active' => 'register'
        ]);  
    }

    public function store(Request $request) //method dari web.php
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',   //format documentation laravel
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],   //format array
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        //enkripsi password gatcha CARA manual bcrypt
            // $validatedData['password'] = bcrypt($validatedData['password']);
       //enkripsi password gatcha CARA HASH
       $validatedData['password'] = Hash::make($validatedData['password']);
       
        User::create($validatedData);

        // $request->session()->flash('success', 'Registraation successfull! Please login'); //notification

        return redirect('/login')->with('success', 'Registration successfull! Please login');  //kembali ke hal.login
    }
}