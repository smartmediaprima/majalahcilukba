<?php

use App\Models\Magazine;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[LandingPageController::class, 'index']);

Route::get('/majalah', [LandingPageController::class, 'majalah']);

Route::get('/categories/{category:slug}', [LandingPageController::class, 'category']);

Route::get('/magazines/{magazine:edisi}', [LandingPageController::class, 'edisi']);

Route::get('/about', function () {
    return view('about');
});
