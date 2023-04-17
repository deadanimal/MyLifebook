<?php

use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StaticController::class, 'home']);
Route::get('/about', [StaticController::class, 'about']);
Route::get('/terms', [StaticController::class, 'terms']);
Route::get('/privacy', [StaticController::class, 'privacy']);

