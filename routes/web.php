<?php

use Illuminate\Support\Facades\Route;

// Landing pages
Route::get('/', 'App\Http\Controllers\Marketing\Landing\IndexController@index')->name('index');
Route::get('/products', 'App\Http\Controllers\Marketing\Landing\ProductsController@products')->name('products');
Route::get('/pricing', 'App\Http\Controllers\Marketing\Landing\PricingController@pricing')->name('pricing');
Route::get('/help-center', 'App\Http\Controllers\Marketing\Landing\HelpCenterController@helpCenter')->name('helpCenter');
Route::get('/testimonials', 'App\Http\Controllers\Marketing\Landing\ExtendedPagesController@testimonials')->name('testimonials');
Route::get('/privacy', 'App\Http\Controllers\Marketing\Landing\ExtendedPagesController@privacy')->name('privacy');
Route::get('/terms', 'App\Http\Controllers\Marketing\Landing\ExtendedPagesController@terms')->name('terms');
// Marketing page


// Auth
require __DIR__.'/auth.php';

// SaaS
Route::get('/dashboard', function () {
    return view('SaaS.dashboard');
})->middleware(['auth'])->name('dashboard');


