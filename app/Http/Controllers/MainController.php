<?php

namespace App\Http\Controllers;

use App\Product;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::available()->get();

        return view('welcome')->with([
            'products' => $products,
        ]);
    }
}
