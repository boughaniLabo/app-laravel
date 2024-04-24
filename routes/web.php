<?php

use App\Http\Controllers\BioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/bio', [BioController::class, 'index'])->name('bio');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/music', [MusicController::class, 'index'])->name('music');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/tour', [TourController::class, 'index'])->name('tour');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::post('/lang', function(Request $request){
    return App::currentLocale();
})->name('lang');