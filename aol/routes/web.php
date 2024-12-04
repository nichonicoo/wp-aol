<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DatasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public Routes
Route::get('/', [DatasController::class, 'index_pubs'])->name('home.index');  // Route untuk menampilkan produk

// Dashboard (Requires Authentication)
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes (Only Accessible if Authenticated)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/dashboard', [DatasController::class, 'index'])->name('dashboard');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Create Product
    Route::get('/create', [DatasController::class, 'create'])->name('products.create');
    Route::post('/store', [DatasController::class, 'store'])->name('products.store');
});

// Other Pages (Public)
Route::get('/OurTeam', function () {
    return view('OurTeam');
});

Route::get('/contact', function () {
    return view('Contact');
})->name('contact');

// Authentication Routes (Login, Register, etc.)
require __DIR__.'/auth.php';
