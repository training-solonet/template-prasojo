<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Pembelian\BarangController;
use App\Http\Controllers\Pembelian\RiwayatController;
use App\Http\Controllers\Pembelian\PurchaseController;
use App\Http\Controllers\Pembelian\SupplierController;
use App\Http\Controllers\Pembelian\DashboardController;
use App\Http\Controllers\Pembelian\PembayaranController;
use App\Http\Controllers\Pembelian\PermintaanController;
use App\Http\Controllers\Produksi\DaftarSPPController;
use App\Http\Controllers\Produksi\LaporanEfisiensiController;
use App\Http\Controllers\Produksi\LaporanProduksiController;
use App\Http\Controllers\Produksi\PermintaanBahanController;
use App\Http\Controllers\Produksi\PermintaanProduksiController;
use App\Http\Controllers\Produksi\ProduksiController;
use App\Http\Controllers\Produksi\StokController;

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
    Route::get('/dashboard', [ProduksiController::class, 'index'])->name('dashboard.produksi');
    Route::get('/permintaan-produksi', [PermintaanProduksiController::class, 'index'])->name('permintaan.produksi');
    Route::get('/daftar-spp', [DaftarSPPController::class, 'index'])->name('daftar.spp');
    Route::get('/stok', [StokController::class, 'index'])->name('stok');
    Route::get('/permintaan-bahan', [PermintaanBahanController::class, 'index'])->name('permintaan.bahan');
    Route::get('/laporan-produksi', [LaporanProduksiController::class, 'index'])->name('laporan.produksi');
    Route::get('/laporan-efisiensi', [LaporanEfisiensiController::class, 'index'])->name('laporan.efisiensi');
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