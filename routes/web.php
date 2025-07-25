<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
});

// Route untuk menampilkan form tambah user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Route untuk menyimpan data user
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// Route untuk menampilkan daftar user
Route::get('/users', [UserController::class, 'index'])->name('user.index');

// Route untuk menampilkan form tambah admin
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

// Route untuk menyimpan data admin
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

// Route untuk menampilkan daftar admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Route untuk About
Route::get('/about', function () {
    return view('about');
});

// Route untuk Contact
Route::get('/contact', function () {
    return view('contact');
});

// Route untuk Gallery
Route::get('/gallery', function () {
    return view('gallery');
});


use App\Http\Controllers\ProductController;

Route::resource('/products', ProductController::class);

Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');

