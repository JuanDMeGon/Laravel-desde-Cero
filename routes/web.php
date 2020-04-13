<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('products', function () {
    return 'This is the list of products';
})->name('products.index');

Route::get('products/create', function () {
    return 'This is the form to create a product';
})->name('products.create');

Route::post('products', function () {
    //
})->name('products.store');

Route::get('products/{product}', function ($product) {
    return "Showing product with id {$product}";
})->name('products.show');

Route::get('products/{product}/edit', function ($product) {
    return "Showing the form to edit the product with id {$product}";
})->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', function ($product) {
    //
})->name('products.update');

Route::delete('products/{product}', function ($product) {
    //
})->name('products.destroy');
