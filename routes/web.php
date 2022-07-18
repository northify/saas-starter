<?php

use Illuminate\Support\Facades\Route;

// MARKETING PAGES
// Landing
Route::get('/', 'App\Http\Controllers\Marketing\Landing\IndexController@index');
Route::get('/products', 'App\Http\Controllers\Marketing\Landing\ProductsController@products');
Route::get('/pricing', 'App\Http\Controllers\Marketing\Landing\PricingController@pricing');
Route::get('/help-center', 'App\Http\Controllers\Marketing\Landing\HelpCenterController@helpCenter');
Route::get('/testimonials', 'App\Http\Controllers\Marketing\Landing\ExtendedPagesController@testimonials');
Route::get('/privacy', 'App\Http\Controllers\Marketing\Landing\ExtendedPagesController@privacy');
Route::get('/terms', 'App\Http\Controllers\Marketing\Landing\ExtendedPagesController@terms');

// Product
Route::get('/create/{slug}', 'App\Http\Controllers\Marketing\Create\IndexController@index');


// Auth
require __DIR__.'/auth.php';

// SaaS
Route::get('/dashboard', function () {
    return view('SaaS.dashboard');
})->middleware(['auth'])->name('dashboard');


