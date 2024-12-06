<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DatasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public Routes
Route::get('/', [DatasController::class, 'index_pubs'])->name('home.index');  // Route untuk menampilkan produk
Route::get('/AllReports', [DatasController::class, 'allreports'])->name('allreports.index');
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
})->name('Ourteam.index');

Route::get('/contact', function () {
    return view('Contact');
})->name('contact');

Route::get('/aboutus', [DatasController::class, 'aboutUs'])->name('aboutUs');

// Authentication Routes (Login, Register, etc.)
require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin']);
