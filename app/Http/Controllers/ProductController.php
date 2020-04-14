<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return 'This is the form to create a product from CONTROLLER';
    }

    public function store()
    {
        //
    }

    public function show($product)
    {
        return view('products.show');
    }

    public function edit($product)
    {
        return "Showing the form to edit the product with id {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
