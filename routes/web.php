<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::middleware(['auth', 'verified', 'module:barco'])
    ->prefix('barco')->name('barco.')->group(function () {
        // BaRCO routes
    });

require __DIR__.'/settings.php';
