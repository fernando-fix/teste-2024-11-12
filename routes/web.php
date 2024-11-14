<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Rota principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas de autenticação
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('auth.store');
Route::any('logout', [AuthController::class, 'destroy'])->name('auth.destroy')->middleware('auth');

// Rotas protegidas
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('contacts', ContactController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('profiles', ProfileController::class)
        ->only(['index', 'edit', 'update'])
        ->parameter('profiles', 'user');
});
