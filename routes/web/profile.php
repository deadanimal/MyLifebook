<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\ProfileController;

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'view_self_profile'])->name('profile');   
    Route::put('/profile', [ProfileController::class, 'update_self_profile']);   

    Route::get('/dashboard', [ProfileController::class, 'view_dashboard'])->name('dashboard'); 

    Route::get('/profiles', [ProfileController::class, 'list_profiles']);
    Route::get('/profiles/{profile_id}', [ProfileController::class, 'detail_profile']);
    Route::post('/profiles', [ProfileController::class, 'create_profile']);
    Route::put('/profiles/{profile_id}', [ProfileController::class, 'update_profile']);

    Route::get('/billing', [ProfileController::class, 'billing']);    

});

Route::get('/billing-from-mobile', [ProfileController::class, 'billing_from_mobile']);

Route::get('/test', [ProfileController::class, 'test_get']);
Route::post('/test', [ProfileController::class, 'test_post']);
