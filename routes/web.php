<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/impressum', 'impressum')->name('impressum');
Route::view('/datenschutz', 'datenschutz')->name('datenschutz');

require __DIR__.'/auth.php';