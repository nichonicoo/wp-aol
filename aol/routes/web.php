<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DatasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public Routes

Route::get('/search', [DatasController::class, 'search'])->name('datas.search');


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

    // Edit
    Route::get('/datas/{id}/edit', [DatasController::class, 'edit_datas'])->name('user_datas.edit');
    Route::put('/datas/{id}', [DatasController::class, 'update_datas'])->name('user_datas.update');
    Route::delete('/datas/{id}/delete', [DatasController::class, 'delete_datas'])->name('user_datas.delete');

    // Create Product
    Route::get('/create', [DatasController::class, 'create'])->name('products.create');
    Route::post('/store', [DatasController::class, 'store'])->name('products.store');

    //details
    Route::get('/datas/{id}/details', [DatasController::class, 'data_detail'])->name('datas.details');

    // donation
    Route::get('/donate', [DonationController::class, 'view_donation'])->name('donate.form');
    Route::post('/donate', [DonationController::class, 'process'])->name('donate.process');
    Route::get('/donate/confirm/{id}', [DonationController::class, 'confirmDonation'])->name('donate.confirm');

    Route::get('/donate/success/{id}', [DonationController::class, 'success'])->name('donate.success');

});

Route::get('/datas/{id}/details', [DatasController::class, 'data_detail'])->name('datas.details');

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

//Route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin']);

Route::middleware(['auth', 'admin'])->group( function () {
    Route::get('admin/dashboard', [DatasController::class,'admin_Dash'])->name('admin.dashboard');
    Route::get('admin/datas/{id}/edit', [DatasController::class,'admin_edit'])->name('admin.edit');
    Route::put('admin/datas/{id}', [DatasController::class,'admin_Update'])->name('admin.update');
    Route::delete('admin/datas/{id}/delete', [DatasController::class,'admin_Delete_Report'])->name('admin.delete');
    // Route::get('admin/users', [UsersController::class,'index'])->name('admin.users');
    // Route::get('admin/users/create', [UsersController::class,'create'])->name('admin.users.create');
    // Route::post('admin/users', [UsersController::class,'store'])->name('admin.users.store');
    // Route::get('admin/users/{user}', [UsersController::class,'show'])->name('admin.users.show');
    // Route::get('admin/users/{user}/edit', [UsersController::class,'edit'])->name('admin.users.edit');
    // Route::put('admin/users/{user}', [UsersController::class,'update'])->name('admin.users.update');
    // Route::delete('admin/users/{user}', [UsersController::class,'destroy'])->name('admin.users.destroy');
});

// Route::get('/generate', function(){
//     \Illuminate\Support\Facades\Artisan::call('storage:link');
//     echo 'ok';
//  });

Route::get('/foo', function () {
    Artisan::call('storage:link');
    });
