<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogpostController;

Route::get('/', function () {
    return view('static.home');
});

Route::get('/about', function () {
    return view('static.about');
});

Route::get('/privacy', function () {
    return view('static.privacy');
});

Route::get('/terms', function () {
    return view('static.terms');
});

Route::get('/mobile-from-billing', function () {
    return view('static.terms');
})->name('mobile-from-billing');

Route::get('/blogposts', [BlogpostController::class, 'list_blogposts']);

Route::get('/blogposts/{slugname}', [BlogpostController::class, 'detail_blogpost']);