<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



require __DIR__.'/api/auth.php';
require __DIR__.'/api/chat.php';
require __DIR__.'/api/profile.php';
require __DIR__.'/api/record.php';
