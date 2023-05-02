<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProfileController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profile', [ProfileController::class, 'view_profile']);   
    Route::put('/profile', [ProfileController::class, 'update_profile']);   

    Route::get('/billing', [ProfileController::class, 'billing']);

    Route::delete('/tokens', function (Request $request) {
        $user = $request->user();
        $user->tokens()->delete();
        return ['message' => 'All previous tokens deleted.'];        
    });    


});
