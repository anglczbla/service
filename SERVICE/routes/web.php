<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PengantaranController;

// Route dasar halaman
Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

// Route untuk dashboard dengan middleware auth dan verified
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Middleware auth untuk grup rute terkait profil
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route resource untuk ServiceController
    Route::resource('service', ServiceController::class);

    // Rute PUT untuk update
    Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::put('/service/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
    Route::put('/pengantaran/{id}', [PengantaranController::class, 'update'])->name('pengantaran.update');
});

// Tambahkan ini di akhir file untuk memastikan rute auth.php dimuat dengan benar
require __DIR__.'/auth.php';
