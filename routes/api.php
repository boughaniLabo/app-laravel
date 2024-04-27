<?php

use App\Http\Controllers\Api\ApiUploadController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\SongController;
use App\Http\Controllers\AlbumController;

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

// Routes for Albums
Route::get('/albums', [AlbumController::class, 'index']);
Route::post('/albums', [AlbumController::class, 'store']);
Route::get('/albums/{id}', [AlbumController::class, 'show']);
Route::put('/albums/{id}', [AlbumController::class, 'update']);
Route::delete('/albums/{id}', [AlbumController::class, 'destroy']);
Route::get('/albums/songs/{id}', [AlbumController::class, 'showWithSongs']);

// Routes for Songs
Route::get('/songs', [SongController::class, 'index']);
Route::post('/songs', [SongController::class, 'store']);
Route::get('/songs/{id}', [SongController::class, 'show']);
Route::put('/songs/{id}', [SongController::class, 'update']);
Route::delete('/songs/{id}', [SongController::class, 'destroy']);