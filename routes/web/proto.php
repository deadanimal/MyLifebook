<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ProtoController;


Route::prefix('proto')->group(function () {

    Route::post('/loans', [ProtoController::class, 'loans']);
    Route::get('/loans/1', [ProtoController::class, 'loans_1']);;

    Route::post('/grants', [ProtoController::class, 'grants']);
    Route::get('/grants/1', [ProtoController::class, 'grants_1']);;

});