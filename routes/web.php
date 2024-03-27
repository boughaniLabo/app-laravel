<?php

use App\Http\Controllers\Api\ApiUploadController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/bio', [BioController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/music', [MusicController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/tour', [TourController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);

