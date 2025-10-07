<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
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

Route::fallback(function () {
    return view('Maaf, halaman tidak ditemukan');
});