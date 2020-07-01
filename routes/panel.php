<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'PanelController@index')->name('panel');
Route::resource('products', 'ProductController');
