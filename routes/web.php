<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('login');
Route::post('login', [PageController::class, 'login'])->name('login.post');
Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('profile', [PageController::class, 'profile'])->name('profile');
Route::get('pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/', [PageController::class, 'logout'])->name('logout');
