<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route; // INI HARUS ADA DAN BENAR
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman awal (biarkan tetap di sini)
Route::get('/', function () {
    return view('home');
});

// >>> MULAI KODE RUTE CUSTOM ANDA DI SINI <<<

// Dashboard pengguna (login & email terverifikasi)
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


// Forum publik (komentar/testimoni bisa dibaca siapa saja)
Route::get('/forum', [ForumController::class, 'index'])->name('forum');

// Route untuk user login (auth)
Route::middleware(['auth'])->group(function () {
    // Halaman edit profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route.delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Kirim komentar forum
    Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');

    // Hapus komentar forum
    Route.delete('/forum/{comment}', [ForumController::class, 'destroy'])->withTrashed()->name('forum.destroy');

    // Checkout dan simpan pesanan
    Route.get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route.post('/orders', [OrderController::class, 'store'])->name('orders.store');

    // Halaman keranjang
    Route::get('/keranjang', [OrderController::class, 'create'])->name('keranjang');

    // Like/Unlike komentar
    Route::post('/forum/{comment}/toggle-like', [ForumController::class, 'toggleLike'])->name('forum.toggleLike');

    // Halaman detail pesanan
    Route::get('/orders/{order}', [OrderController::class, 'show'])->withTrashed()->name('orders.show');

    // Mengarsipkan pesanan
    Route.delete('/orders/{order}/archive', [OrderController::class, 'archive'])->name('orders.archive');

    // Mengunggah bukti transfer
    Route.post('/orders/{order}/upload-bukti', [OrderController::class, 'uploadBukti'])->name('orders.uploadBukti');
});

// Route khusus untuk admin (tanpa middleware isAdmin di route)
Route::middleware(['auth'])->group(function () {
    // CRUD Produk
    Route::resource('/produk', ProdukController::class);

    // Melihat daftar pesanan (admin view)
    Route.resource('/orders', OrderController::class)->only(['index']);

    // Rute untuk mengubah status pesanan oleh admin
    Route::patch('/orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

    // Ekspor histori penjualan
    Route.get('/orders/export', [OrderController::class, 'export'])->name('orders.export');
});

// Rute untuk halaman Tentang Kami
Route::get('/about', function () {
    return view('about');
});

// Auth default routes from Laravel Breeze
require __DIR__.'/auth.php';
