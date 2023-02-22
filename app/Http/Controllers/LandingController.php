<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function homepage()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function services()
    {
        return view('services');
    }

    public function projects()
    {
        return view('projects');
    }

    public function products()
    {
        return view('products');
    }

    public function order()
    {
        return view('order');
    }

    
}
