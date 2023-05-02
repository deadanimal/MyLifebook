<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

require __DIR__.'/api/audiovisual.php';
require __DIR__.'/api/ask.php';
require __DIR__.'/api/document.php';
require __DIR__.'/api/profile.php';
// require __DIR__.'/api/question.php';
// require __DIR__.'/api/record.php';
// require __DIR__.'/api/site.php';
// require __DIR__.'/api/static.php';