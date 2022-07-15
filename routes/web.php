<?php

use Illuminate\Support\Facades\Route;

// Landing pages
Route::get('/', 'App\Http\Controllers\Marketing\Landing\IndexController@index')->name('index');
Route::get('/products', 'App\Http\Controllers\Marketing\Landing\ProductsController@products')->name('products');
Route::get('/pricing', 'App\Http\Controllers\Marketing\Landing\PricingController@pricing')->name('pricing');
// Marketing page


// Auth
require __DIR__.'/auth.php';

// SaaS
Route::get('/dashboard', function () {
    return view('SaaS.dashboard');
})->middleware(['auth'])->name('dashboard');


