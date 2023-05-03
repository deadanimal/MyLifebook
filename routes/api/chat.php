<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



Route::middleware('auth:sanctum')->group(function () {

    Route::get('/chats', [ChatController::class, 'list_chats']);   
    Route::post('/chats', [ChatController::class, 'create_chat']);   
    Route::get('/chats/{chat_id}', [ChatController::class, 'detail_chat']);

});
