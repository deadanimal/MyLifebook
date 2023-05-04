<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\VideoController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



Route::middleware('auth:sanctum')->group(function () {

    Route::get('/videos', [VideoController::class, 'list_videos']);   
    Route::post('/videos', [VideoController::class, 'create_video']);   
    Route::get('/videos/{video_id}', [VideoController::class, 'detail_video']);

});
