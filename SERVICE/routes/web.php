<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('transaksi', function () {
    return view('transaksi');
});
Route::get('produk', function () {
    return view('produk');
});
Route::get('pengantaran', function () {
    return view('pengantaran');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('service', ServiceController::class);
Route::resource('produk', ProdukController::class);
Route::resource('transaksi', TransaksiController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::put('/service/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::put('pengantaran/transaksi/{id}', [PengantaranController::class, 'update'])->name('pengantaran.update');

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/pengantaran', [PengantaranController::class, 'index']);



require __DIR__.'/auth.php';
