<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'index'])->name('Index');
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/user/login', [UserController::class, 'login'])->name('User.Login.Post');
Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/user/register', [UserController::class, 'register'])->name('User.Register.Post');
