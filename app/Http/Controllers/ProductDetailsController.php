<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    /**
     * Display nutty grain product details
     *
     * @return \Illuminate\Http\Response
     */
    public function nutty()
    {
        return view('product-details.nutty');
    }

    /**
     * Display multi grain product details
     *
     * @return \Illuminate\Http\Response
     */
    public function multigrain()
    {
        return view('product-details.multigrain');
    }
}