<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AudiovisualController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



Route::middleware('auth:sanctum')->group(function () {

    Route::get('/audiovisuals', [AudiovisualController::class, 'list_audiovisuals']);   
    Route::post('/audiovisuals', [AudiovisualController::class, 'create_audiovisual']);   
    Route::get('/audiovisuals/{audiovisual_id}', [AudiovisualController::class, 'detail_audiovisual']);
    Route::put('/audiovisuals/{audiovisual_id}/remove', [AudiovisualController::class, 'remove_audiovisual']);
    Route::put('/audiovisuals/{audiovisual_id}/annotations', [AudiovisualController::class, 'update_audiovisual_annotations']);

});
