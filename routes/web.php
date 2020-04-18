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

Route::get('/', 'MainController@index')->name('main');

Route::resource('products', 'ProductController');

Route::resource('products.carts', 'ProductCartController')->only(['store', 'destroy']);

Route::resource('carts', 'CartController')->only(['index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
