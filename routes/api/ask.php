<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AskController;



Route::middleware('auth:sanctum')->group(function () {

    Route::get('/asks', [AskController::class, 'list_asks']);   
    Route::post('/asks', [AskController::class, 'create_ask']);   
    Route::get('/asks/{ask_id}', [AskController::class, 'detail_ask']);

});
