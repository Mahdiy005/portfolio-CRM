<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExperiencController;
use App\Http\Controllers\ExperiencSectionController;
use App\Http\Controllers\LandingSectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SkillSectionController;
use App\Http\Controllers\WorkSectionController;
use App\Http\Controllers\WorkTableController;
use App\Http\Middleware\PreventIfNotAuthMiddleWare;
use App\Models\Category;
use App\Models\ExperiencSection;
use App\Models\LandingSection;
use App\Models\SkillSection;
use App\Models\WorkSection;
use App\Models\WorkTable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $landingData = LandingSection::first();
    $expertiseSectionData = ExperiencSection::first();
    $skillSectionData = SkillSection::first();
    $workSectionData = WorkSection::first();
    $categories = Category::all();
    return view('home', compact('landingData', 'expertiseSectionData', 'skillSectionData', 'workSectionData', 'categories'));
})->name('home');

Route::get('/admin', function () {
    if(! Auth::check()) {
        return view('auth.login');
    }
    $data = LandingSection::first();
    return view('dashboared.index', compact('data'));
});

// LANDING ROUTES
Route::controller(LandingSectionController::class)->middleware(PreventIfNotAuthMiddleWare::class)->name('landing.')->prefix('landing')->group(function () {
    Route::get('/show', 'show')->name('show');
    Route::get('/edit', 'edit')->name('edit');
    Route::put('/edit/{landingSection}', 'update')->name('update');
});


// SECTION EXPERIEMNCE
Route::controller(ExperiencSectionController::class)
    ->middleware(PreventIfNotAuthMiddleWare::class)
    ->name('experienc-section.')
    ->prefix('section-experinec')
    ->group(function () {
        Route::get('/edit-headers', 'editHedaers')->name('edit.headers');
        Route::put('/edit-headers/{experiencSection}', 'updateHedaers')->name('upadate.headers');
    });

// EXPERIENCE TABEL
Route::controller(ExperiencController::class)
    ->middleware(PreventIfNotAuthMiddleWare::class)
    ->name('experienc.')
    ->prefix('experinec')
    ->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/show', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });

// SKILLS SECTION ROUTES
Route::controller(SkillSectionController::class)
    ->name('skill.')
    ->prefix('skill-section')
    ->middleware(PreventIfNotAuthMiddleWare::class)
    ->group(function () {
        Route::get('/edit', 'edit')->name('edit-section');
        Route::put('/edit/{id}', 'update')->name('update');
    });

// SKILLS ROUTES
Route::controller(SkillController::class)
    ->name('skill-table.')
    ->prefix('skill-table')
    ->middleware(PreventIfNotAuthMiddleWare::class)
    ->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/show', 'show')->name('show');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/delete/{id}', 'destroy')->name('destroy');
    });

// WORK SECTION ROUTES
Route::controller(WorkSectionController::class)
    ->name('work-section.')
    ->prefix('work-section')
    ->middleware(PreventIfNotAuthMiddleWare::class)
    ->group(function () {
        Route::get('/edit-headers', 'editHeaders')->name('editWorkHeaders');
        Route::put('/update-headers/{id}', 'updateHeaders')->name('updateWorkHeaders');
    });

// CATEGORY TABLE ROUTES
Route::controller(CategoryController::class)
    ->name('category.')
    ->prefix('work/category')
    ->middleware(PreventIfNotAuthMiddleWare::class)
    ->group(function () {
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('show', 'show')->name('show');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::put('update/{id}', 'update')->name('update');
        Route::delete('delete/{id}', 'destroy')->name('destroy');
        Route::get('index', 'index')->name('index');
    });

// Work Table ROUTES
Route::controller(WorkTableController::class)
->name('work.')
->prefix('work')
->middleware(PreventIfNotAuthMiddleWare::class)
->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::put('update/{id}', 'update')->name('update');
    Route::delete('destroy/{id}', 'delete')->name('destroy');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
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
