<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\RecordController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



Route::middleware('auth:sanctum')->group(function () {

    Route::get('/records', [RecordController::class, 'list_records']);   
    Route::post('/records', [RecordController::class, 'create_record']);   
    Route::get('/records/{record_id}', [RecordController::class, 'detail_record']);

});
