<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();

        dd($products);

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
        // $product = DB::table('products')->where('id', $product)->first();
        $product = DB::table('products')->find($product);

        dd($product);

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
