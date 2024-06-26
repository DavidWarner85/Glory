<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Home')->name('home');

Route::inertia('/Narrators', 'Narrators')->name('narrators');

Route::post('/logout', [AuthController::class,'logout'])->name ('logout');

Route::inertia('/register', 'Auth/Register')->name('register');
Route::post('/register', [AuthController::class,'register']);

Route::inertia('/login', 'Auth/Login')->name('login');
Route::post('/login', [AuthController::class,'login']);