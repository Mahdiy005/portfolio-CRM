<?php

use App\Http\Controllers\LandingSectionController;
use App\Http\Controllers\ProfileController;
use App\Models\LandingSection;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $landingData = LandingSection::first();
    return view('home', compact('landingData'));
})->name('home');

Route::get('/admin', function () {
    return view('auth.login');
});

// LANDING ROUTES
Route::controller(LandingSectionController::class)->name('landing.')->prefix('landing')->group(function () {
    Route::get('/show', 'show')->name('show');
    Route::get('/edit', 'edit')->name('edit');
    Route::put('/edit/{landingSection}', 'update')->name('update');
});

Route::get('/dashboard', function () {
    $data = LandingSection::first();
    return view('dashboared.index', compact('data'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
