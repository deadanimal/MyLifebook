<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [SiteController::class, 'dashboard']);

    Route::get('/profile', [SiteController::class, 'view_profile']);
    Route::put('/profile', [SiteController::class, 'update_profile']);
    Route::get('/settings', [SiteController::class, 'view_settings']);
    Route::put('/settings', [SiteController::class, 'update_settings']);

    Route::get('/billing', [SiteController::class, 'billing']);
});