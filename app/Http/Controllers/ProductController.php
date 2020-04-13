<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return 'This is the list of products from CONTROLLER';
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
        return "Showing product with id {$product} from CONTROLLER";
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
