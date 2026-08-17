<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Authentication/login');
})->name('login');

Route::get('/signup', function () {
    return view('Authentication/signup');
})->name('signup');

Route::get('/forgotPassword', function () {
    return view('Authentication/forgot_password');
})->name('forgotPassword');

Route::post('/signup', [AuthController::class, 'signup'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('check');
