<?php

use Illuminate\Support\Facades\Route;

// Perfume Landing Page
Route::get('/', function () {
    return view('landing');
});

// Register / Sign Up Form
Route::get('/register', function () {
    return view('home');
});

// Login Form
Route::get('/login', function () {
    return view('login');
});

// Forgot Password Form
Route::get('/forgot-password', function () {
    return view('forgot-password');
});