<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
Route::get('/register', [AuthController::class, 'register_page'])->name('register.page');

Route::post('/register', [AuthController::class, 'register'])->name('register');