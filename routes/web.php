<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\PelangganIndexController;
use App\Http\Controllers\PelangganDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function () {
    Route::prefix('/')->name('index.')->group(function () {
        Route::get('/', [PelangganIndexController::class, 'index'])->name('index');
    });

    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [PelangganDashboardController::class, 'index'])->name('index');
    });
}); 

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/registertoko', [AuthController::class, 'registertoko']);
Route::get('/suksesregister', [AuthController::class, 'suksesregister']);