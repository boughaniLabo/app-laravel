<?php

use App\Http\Controllers\Api\ApiUploadController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/auth/login', [AuthController::class, 'loginUser']);

//applay the auth middlware 
Route::middleware('auth:sanctum')->group(function () {
    //user routes
    Route::post('/upload', [ApiUploadController::class, 'upload']);


    Route::get('/posts', [BlogController::class, 'getAllPosts']);
    Route::put('/posts', [BlogController::class, 'updatePost']);
    Route::post('/posts', [BlogController::class, 'createPost']);
    Route::delete('/posts/{id}', [BlogController::class, 'deletePost']);

    

});
