<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

// Custom Views
Route::get('/', function () { return view('landing'); });
use App\Http\Controllers\Auth\LoginController;

// 1. Loads the login view (GET)
Route::get('/login', [LoginController::class, 'create'])->name('login');

// 2. Processes the login form submission (POST)
Route::post('/login', [LoginController::class, 'store']);
Route::get('/forgot-password', function () { return view('forgot-password'); });

// Registration Routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);