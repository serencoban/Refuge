<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
});

Route::get('/animals', function () {
    return view('public.animals');
});

Route::get('/animals', function () {
    return view('public.animals');
});

Route::get('/animal', function () {
    return view('public.animal');
});
