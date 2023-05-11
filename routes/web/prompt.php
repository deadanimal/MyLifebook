<?php

use App\Http\Controllers\Web\PromptController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'trainerAccess'])->group(function () {

    Route::get('/prompts', [PromptController::class, 'list_prompts']);
    Route::post('/prompts', [PromptController::class, 'create_prompt']);
    Route::get('/prompts/{prompt_id}', [PromptController::class, 'detail_prompt']);

});