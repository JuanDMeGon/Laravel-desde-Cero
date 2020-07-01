<?php

namespace App\Http\Controllers;

use App\Product;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome')->with([
            'products' => $products,
        ]);
    }
}
