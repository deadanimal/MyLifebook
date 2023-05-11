<?php

use App\Http\Controllers\Web\ChatController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/chats', [ChatController::class, 'list_chats']);
    Route::post('/chats/dashboard', [ChatController::class, 'create_chat']);

});