<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DocumentController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



Route::middleware('auth:sanctum')->group(function () {

    Route::get('/documents', [DocumentController::class, 'list_documents']);   
    Route::post('/documents', [DocumentController::class, 'create_document']);   
    Route::get('/documents/{document_id}', [DocumentController::class, 'detail_document']);
    Route::put('/documents/{document_id}/remove', [DocumentController::class, 'remove_document']);
    #Route::put('/documents/{document_id}/annotations', [DocumentController::class, 'update_document_annotations']);

});
