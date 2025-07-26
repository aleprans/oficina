<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CorretivasController;
use App\Http\Controllers\PreventivasController;
use App\Http\Controllers\HorimetrosController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/corretivas', [CorretivasController::class, 'index'])->name('corretivas');

Route::get('/preventivas', [PreventivasController::class, 'index'])->name('preventivas');

Route::get('/horimetros', [HorimetrosController::class, 'index'])->name('horimetros');