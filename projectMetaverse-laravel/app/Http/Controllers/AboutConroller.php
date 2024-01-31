<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        return view('About_Deskripsi', [
            "title" => "Single Post",
            "About_Deskripsi" => About::all()
        ]);
    }

    public function show($slug)
    {
        return view('About_Deskripsi', [
            "title" => "Single Post",
            "About_Deskripsi" => About::find($slug)
        ]);
    }
}
