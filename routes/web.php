<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/kategori', function () {
    return view('admin.kategori');
});

Route::get('/admin/jenis', function () {
    return view('admin.jenis');
});
