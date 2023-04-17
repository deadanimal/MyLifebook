<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/records', [RecordController::class, 'list_records']);
    Route::post('/records', [RecordController::class, 'create_record']);
    Route::get('/records/{record_id}', [RecordController::class, 'detail_record']);


    Route::get('/questions', [RecordController::class, 'list_questions']);
    Route::post('/questions', [RecordController::class, 'create_question']);
    Route::get('/questions/{question_id}', [RecordController::class, 'detail_question']);


    Route::get('/rewinds', [RecordController::class, 'list_rewinds']);
    Route::post('/rewinds', [RecordController::class, 'create_rewind']);
    Route::get('/rewinds/{rewind_id}', [RecordController::class, 'detail_rewind']);

});