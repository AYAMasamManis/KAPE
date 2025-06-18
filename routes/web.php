<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;

// Landing Page
Route::get('/', function () {
    return redirect('/dashboard'); // bisa diubah ke welcome jika mau
});

// Dashboard berdasarkan role
Route::get('/dashboard', function () {
    if (Auth::user()->role === 'admin') {
        return view('dashboard.admin');
    } else {
        return view('dashboard.customer');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

// Halaman Produk
Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth');

// Halaman Profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth (login, register, logout)
require __DIR__.'/auth.php';
