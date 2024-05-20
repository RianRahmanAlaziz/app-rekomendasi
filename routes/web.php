<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TanamanController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);

Route::controller(Logincontroller::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store');
});

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/data-tanaman', TanamanController::class);
    Route::resource('/data-pupuk', PupukController::class);
});
