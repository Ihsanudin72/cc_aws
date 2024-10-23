<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/show', [UserController::class, 'show'])->name('show');
Route::get('/show', [UserController::class, 'show'])->middleware('show')->name('show');


Route::post('form', [UploadController::class, 'form'])->name('form');

require __DIR__.'/auth.php';
