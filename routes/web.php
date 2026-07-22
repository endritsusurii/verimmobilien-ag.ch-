<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Website
Route::view('/impressum', 'impressum')->name('impressum');
Route::view('/datenschutz', 'datenschutz')->name('datenschutz');

// Admin
Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::view('/dashboard', 'admin.dashboard')
            ->name('dashboard');

        Route::resource('properties', PropertyController::class)
            ->except('show');
    });

// Breeze Auth
require __DIR__.'/auth.php';