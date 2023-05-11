<?php

use App\Http\Controllers\Web\RecordController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/records', [RecordController::class, 'list_records']);
    Route::post('/records', [RecordController::class, 'create_record']);
    Route::get('/records/{record_id}', [RecordController::class, 'detail_record']);

});