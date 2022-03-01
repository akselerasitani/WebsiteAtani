<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganIndexController;
use App\Http\Controllers\PelangganDashboardController;
use App\Http\Controllers\PelangganProdukController;
use App\Http\Controllers\PelangganOrderStatusController;

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

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('proses_loginpelanggan', [AuthController::class, 'proses_loginpelanggan'])->name('proses_loginpelanggan');

Route::get('registerpelanggan', [AuthController::class, 'register'])->name('registerpelanggan');
Route::post('proses_registerpelanggan', [AuthController::class, 'proses_registerpelanggan'])->name('proses_registerpelanggan');

Route::get('logoutpelanggan', [AuthController::class, 'logoutpelanggan'])->name('logoutpelanggan');

Route::prefix('/')->group(function () {
    Route::prefix('/')->name('index.')->group(function () {
        Route::get('/', [PelangganIndexController::class, 'index'])->name('index');
    });

    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [PelangganDashboardController::class, 'index'])->name('index');
    });

    Route::prefix('/order')->name('order.')->group(function () {
        Route::get('/', [PelangganProdukController::class, 'index'])->name('index');
        Route::get('/detail/{id}', [PelangganProdukController::class, 'detail'])->name('detail');
    });
    
    Route::prefix('/orderstatus')->name('orderstatus.')->group(function () {
        Route::get('/', [PelangganOrderStatusController::class, 'index'])->name('index');
        Route::get('/detail', [PelangganOrderStatusController::class, 'detail'])->name('detail');
    });
    
    
}); 
