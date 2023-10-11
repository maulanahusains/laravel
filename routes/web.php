<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/postlogin', [LoginController::class, 'login']);

Route::prefix('/member')->group(function() {
    Route::get('/login', [MemberController::class, 'indexLogin'])->name('member-login');
    Route::get('/logout', [MemberController::class, 'logout']);
    Route::post('/postlogin', [MemberController::class, 'login']);
});

// Route::middleware(['auth', 'level:Kasir'])->group(function () {
//     Route::prefix('/penjualan')->group(function() {
//         Route::get('/', [PenjualanController::class, 'index']);
//         Route::get('/create', [PenjualanController::class, 'create']);
//         Route::post('/store', [PenjualanController::class, 'store']);
//         Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
//         Route::post('/{id}/update', [PenjualanController::class, 'update']);
//         Route::get('/{id}/destroy', [PenjualanController::class, 'destroy']);
//     });
//     Route::get('/dashboard', [DashboardController::class, 'dashboard']);
// });

Route::middleware(['auth', 'level:Admin,Kasir'])->group(function () {
    Route::prefix('/user')->group(function() {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/create', [UserController::class, 'create']);
        Route::post('/store', [UserController::class, 'store']);
        Route::get('/{id}/edit', [UserController::class, 'edit']);
        Route::post('/{id}/update', [UserController::class, 'update']);
        Route::get('/{id}/destroy', [UserController::class, 'destroy']);
    });

    Route::prefix('/member')->group(function() {
        Route::get('/', [MemberController::class, 'index']);
        Route::get('/create', [MemberController::class, 'create']);
        Route::post('/store', [MemberController::class, 'store']);
        Route::get('/{id}/edit', [MemberController::class, 'edit']);
        Route::post('/{id}/update', [MemberController::class, 'update']);
        Route::get('/{id}/destroy', [MemberController::class, 'destroy']);
    });

    Route::prefix('/supplier')->group(function() {
        Route::get('/', [SupplierController::class, 'index']);
        Route::get('/create', [SupplierController::class, 'create']);
        Route::post('/store', [SupplierController::class, 'store']);
        Route::get('/{id}/edit', [SupplierController::class, 'edit']);
        Route::post('/{id}/update', [SupplierController::class, 'update']);
        Route::get('/{id}/destroy', [SupplierController::class, 'destroy']);
    });

    Route::prefix('/sepatu')->group(function() {
        Route::get('/', [SepatuController::class, 'index']);
        Route::get('/create', [SepatuController::class, 'create']);
        Route::post('/store', [SepatuController::class, 'store']);
        Route::get('/{id}/edit', [SepatuController::class, 'edit']);
        Route::post('/{id}/update', [SepatuController::class, 'update']);
        Route::get('/{id}/destroy', [SepatuController::class, 'destroy']);
    });

    Route::prefix('/penjualan')->group(function() {
        Route::get('/', [PenjualanController::class, 'index']);
        Route::get('/create', [PenjualanController::class, 'create']);
        Route::post('/store', [PenjualanController::class, 'store']);
        Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
        Route::post('/{id}/update', [PenjualanController::class, 'update']);
        Route::get('/{id}/destroy', [PenjualanController::class, 'destroy']);
    });

    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
});

Route::prefix('/member')->middleware('auth:member')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'memberDashboard']);
});