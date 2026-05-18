<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::view('/portfolio', 'portfolio');

Route::view('/services', 'services');

Route::get('/gallery', function () {
    return view('gallery');
});