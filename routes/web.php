<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home',['image'=>'/assets/img/home1.jpg']);
})->name('home');
Route::get('/bio', function () {
    return view('page.bio' , ['image'=>'assets/img/arti.jpg']);
})->name('bio');

Route::get('/services', function () {
    return view('page.services');
})->name('services');
Route::get('/music', function () {
    return view('page.music');
})->name('music');
Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');
Route::get('/tour', function () {
    return view('page.tour');
})->name('tour');
Route::get('/blog', function () {
    return view('page.blog');
})->name('blog');