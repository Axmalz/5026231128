<?php

use Illuminate\Support\Facades\Route;
// import java.io; (sama kayak use)

// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('satu', function () {
	return view('pertama');
});
