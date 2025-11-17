<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TeamController;

Route::get('/', function () {
    return view('layout.home');
});

Route::get('/about', function () {
    return view('layout.about');
});

Route::get('/contact', function () {
    return view('layout.contact');
});

Route::get('/program', function () {
    return view('layout.program');
});

Route::get('/team', function () {
    return view('layout.team');
});


// Menggunakan grouping agar lebih terstruktur
Route::group([], function () {
    
    // Resource Routes untuk Products
    // Akses melalui /products, /products/1, /products/create, dll.
    Route::resource('products', ProductController::class);

    // Resource Routes untuk Orders
    // Akses melalui /orders, /orders/1, /orders/create, dll.
    Route::resource('orders', OrderController::class);

    // Resource Routes untuk Teams
    // Akses melalui /teams, /teams/1, /teams/create, dll.
    // Catatan: Ini akan menimpa Route::get('/team') statis di atas.
    Route::resource('teams', TeamController::class);
    
});

Route::fallback(function () {
    return "Maaf, halaman tidak ditemukan"; 
    
});