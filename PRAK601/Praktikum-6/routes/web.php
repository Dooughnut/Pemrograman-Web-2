<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/experience', function() {
    return redirect()->route('experience.show', '01');
})->name('experience');

Route::get('/experience/{id}', [App\Http\Controllers\ExperienceController::class, 'show'])->name('experience.show');
