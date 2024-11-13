<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Rota principal
Route::get('/', [HomeController::class, 'index'])->name('home');
