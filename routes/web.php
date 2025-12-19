<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
});

Route::get('/animals', function () {
    return view('public.animals');
});

Route::get('/animal', function () {
    return view('public.animal');
});

Route::get('/contact', function () {
    return view('public.contact');
});


Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/animal-list', function () {
    return view('admin.animal-list');
});

Route::get('/animal-item', function () {
    return view('admin.animal-item');
});

Route::get('/volunteer', function () {
    return view('admin.volunteer');
});

Route::get('/messages', function () {
    return view('admin.messages');
});

Route::get('/profile', function () {
    return view('admin.profile');
});

