<?php

use Illuminate\Support\Facades\Route;

// Landing pages
Route::get('/', 'App\Http\Controllers\Landing\IndexController@index')->name('index');
Route::get('/pricing', 'App\Http\Controllers\Landing\PricingController@pricing')->name('pricing');
// Marketing page


// Auth
require __DIR__.'/auth.php';

// SaaS
Route::get('/dashboard', function () {
    return view('SaaS.dashboard');
})->middleware(['auth'])->name('dashboard');


