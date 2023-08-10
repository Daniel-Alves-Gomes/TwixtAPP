<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::resource('user', UserController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('site.profile')->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');
Route::get('/register', [LoginController::class, 'create'])->name('login.create');