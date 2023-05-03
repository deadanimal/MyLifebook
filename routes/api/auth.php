<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;


Route::post('/register', [AuthController::class, 'register']);    
Route::post('/login', [AuthController::class, 'login']);   

Route::middleware('auth:sanctum')->group(function () {
    
    Route::delete('/logout', [AuthController::class, 'logout']);   
    
});
