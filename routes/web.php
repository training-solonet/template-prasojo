<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PermintaanController;

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.login');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('login.logout');
Route::get('/splitter', [LoginController::class, 'splitter'])->middleware('auth');

Route::get('/', function() {
    return redirect('login');
})->name('home');

Route::prefix('pembelian')->middleware(['auth','role:pembelian'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/permintaan', [PermintaanController::class, 'index'])->name('permintaan');
    Route::get('/purchase-order', [PurchaseController::class, 'index'])->name('purchase');
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
});

Route::prefix('produksi')->middleware(['auth','role:produksi'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/permintaan', [PermintaanController::class, 'index'])->name('permintaan');
    Route::get('/purchase-order', [PurchaseController::class, 'index'])->name('purchase');
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
});

Route::prefix('marketing')->middleware(['auth','role:marketing'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/permintaan', [PermintaanController::class, 'index'])->name('permintaan');
    Route::get('/purchase-order', [PurchaseController::class, 'index'])->name('purchase');
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
});