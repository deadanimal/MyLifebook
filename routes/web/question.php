<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/questions', [QuestionController::class, 'list_questions']);
    Route::post('/questions', [QuestionController::class, 'create_question']);
    Route::get('/questions/{question_id}', [QuestionController::class, 'detail_question']);
    Route::put('/questions/{question_id}', [QuestionController::class, 'update_question']);

});