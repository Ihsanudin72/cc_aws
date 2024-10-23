<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/profile', [ProfileController::class, 'index']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');});
        

require __DIR__.'/auth.php';
