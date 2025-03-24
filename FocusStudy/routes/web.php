<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [UserController::class, 'authenticate'])->name('login');
Route::get('/register', [UserController::class, 'create'])->name('register');