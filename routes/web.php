<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main.main');
});

Route::get('/admin', function () {
    return view('layout.admin');
});

Route::get('/user', function () {
    return view('layout.user');
});

Route::get('/home', function () {
    return view('layout.home');
});


