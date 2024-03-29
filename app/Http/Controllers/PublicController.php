<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function products()
    {
        return view('products');
    }

    public function about()
    {
        return view('about');
    }

    public function recipes()
    {
        return view('recipes');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function store()
    {
        return view('store');
    }
}
