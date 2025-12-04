<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PermintaanController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/permintaan', [PermintaanController::class, 'index'])->name('permintaan');
Route::get('/purchase-order', [PurchaseController::class, 'index'])->name('purchase');
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
Route::get('/pembayaran', [PembayaranController::class, 'index']);