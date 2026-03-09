<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profil', function () {
    return view('profile.index');
})->middleware(['auth'])->name('profil');

Route::get('/ayu-belanja', function () {
    return view('ayu-belanja');
})->middleware(['auth'])->name('ayu-belanja');

Route::get('/ayu-daur-ulang', function () {
    return view('ayu-daur-ulang');
})->middleware(['auth'])->name('ayu-daur-ulang');

Route::get('/dropoff-lokasi', function () {
    return view('dropoff-lokasi');
})->middleware(['auth'])->name('dropoff-lokasi');

Route::get('/keranjang', function () {
    return view('keranjang');
})->middleware(['auth'])->name('keranjang');

Route::get('/notifikasi', function () {
    return view('notifikasi');
})->middleware(['auth'])->name('notifikasi');

Route::get('/scan-kemasan', function () {
    return view('scan-kemasan');
})->middleware(['auth'])->name('scan-kemasan');

Route::get('/detail-produk', function () {
    return view('detail-produk');
})->middleware(['auth'])->name('detail-produk');

Route::get('/checkout', function () {
    return view('checkout');
})->middleware(['auth'])->name('checkout');

Route::get('/chat-penjual', function () {
    return view('chat-penjual');
})->middleware(['auth'])->name('chat-penjual');

require __DIR__.'/auth.php';
