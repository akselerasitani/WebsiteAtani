<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganIndexController;
use App\Http\Controllers\PelangganDashboardController;
use App\Http\Controllers\PelangganProdukController;
use App\Http\Controllers\PelangganOrderStatusController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\LoginAdminController;

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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('proses_loginpelanggan', [LoginController::class, 'proses_loginpelanggan'])->name('proses_loginpelanggan');

Route::get('registerpelanggan', [RegisterController::class, 'register'])->name('registerpelanggan');
Route::post('proses_registerpelanggan', [RegisterController::class, 'proses_registerpelanggan'])->name('proses_registerpelanggan');

Route::get('logoutpelanggan', [LoginController::class, 'logoutpelanggan'])->name('logoutpelanggan');


Route::prefix('/')->group(function () {
    Route::prefix('/')->name('index.')->group(function () {
        Route::get('/', [PelangganIndexController::class, 'index'])->name('index');
    });

    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [PelangganDashboardController::class, 'index'])->name('index')->middleware('auth');
    });

    Route::prefix('/order')->name('order.')->group(function () {
        Route::get('/', [PelangganProdukController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/detail/{id}', [PelangganProdukController::class, 'detail'])->name('detail')->middleware('auth');
    });
    
    Route::prefix('/orderstatus')->name('orderstatus.')->group(function () {
        Route::get('/', [PelangganOrderStatusController::class, 'index'])->name('index')->middleware('auth');
        Route::get('/detail', [PelangganOrderStatusController::class, 'detail'])->name('detail')->middleware('auth');
    });
    
    
}); 

Route::get('loginadmin', [LoginAdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('proses_loginadmin', [LoginAdminController::class, 'proses_loginadmin'])->name('proses_loginadmin');

Route::get('logoutadmin', [LoginAdminController::class, 'logoutadmin'])->name('logoutadmin');
    Route::prefix('/admin')->group(function () {
        Route::prefix('/')->name('admin.')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
        });

        Route::prefix('/pelanggan')->name('pelanggan.')->group(function () {
            Route::get('/', [PelangganController::class, 'index'])->name('index');
        });

        Route::prefix('/produk')->name('produk.')->group(function () {
            Route::get('/', [ProdukController::class, 'index'])->name('index');
            Route::get('/create', [ProdukController::class, 'create_view'])->name('create');
            Route::post('/create', [ProdukController::class, 'create_process'])->name('create.process');
            Route::get('/view/{id}', [ProdukController::class, 'view'])->name('view');
            Route::get('/update/{id}', [ProdukController::class, 'update_view'])->name('update');
            Route::post('/update/{id}', [ProdukController::class, 'update_process'])->name('update.process');
            Route::get('/delete/{id}', [ProdukController::class, 'delete'])->name('delete');
        });

        Route::prefix('/kategori')->name('kategori.')->group(function () {
            Route::get('/', [KategoriController::class, 'index'])->name('index');
            Route::get('/create', [KategoriController::class, 'create_view'])->name('create');
            Route::post('/create', [KategoriController::class, 'create_process'])->name('create.process');
            Route::get('/update/{id}', [KategoriController::class, 'update_view'])->name('update');
            Route::post('/update/{id}', [KategoriController::class, 'update_process'])->name('update.process');
            Route::get('/delete/{id}', [KategoriController::class, 'delete'])->name('delete');
        });
    }); 