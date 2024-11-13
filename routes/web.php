<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Rota principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas de autenticação
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('auth.store');
Route::get('logout', [AuthController::class, 'destroy'])->name('auth.destroy')->middleware('auth');

//Rotas protegidas
Route::group(
    [
        'middleware' => 'auth',
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'as' => 'admin.',
    ],
    function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    }
);
