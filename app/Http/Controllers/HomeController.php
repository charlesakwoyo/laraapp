<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method for your homepage
    public function index()
    {
        return view('home');
    }

    // Example for another page
    public function about()
    {
        return view('about');
    }
}
