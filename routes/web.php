<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Këto route duhen shtuar gjithashtu:
Route::get('/properties', fn() => view('properties.index'))->name('properties.index');
Route::get('/search', fn() => view('properties.index'))->name('search');