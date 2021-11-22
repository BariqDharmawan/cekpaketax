<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'landing'])->name('landing');
Route::get('tnc', [HomeController::class, 'tnc'])->name('tnc');
Route::get('privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
