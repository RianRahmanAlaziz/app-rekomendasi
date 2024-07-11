<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsiaController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard/data-tanaman/checkSlug', [TanamanController::class, 'checkSlug']);
Route::get('/dashboard/data-pupuk/checkSlug', [PupukController::class, 'checkSlug']);
Route::get('/dashboard/data-usia/checkSlug', [UsiaController::class, 'checkSlug']);

Route::controller(Logincontroller::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store');
});
// dashboard
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/data-user-management', UserController::class);
    Route::resource('/data-tanaman', TanamanController::class);
    Route::resource('/data-pupuk', PupukController::class);
    Route::resource('/data-usia', UsiaController::class);
    Route::resource('/data-slider', SliderController::class);
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('tanaman')->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('/', 'tanaman');

            Route::get('/{tanaman:slug}', 'detailtanaman');
        });
    });
    Route::prefix('pupuk')->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('/', 'pupuk');
            Route::get('/{pupuk:slug}', 'detailpupuk');
        });
    });

    Route::get('/rekomendasi/{usia:slug}', [HomeController::class, 'rekomendasi']);
});
