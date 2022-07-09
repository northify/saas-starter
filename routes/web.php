<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Landing\IndexController@index')->name('index');

Route::get('/dashboard', function () {
    return view('SaaS.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
