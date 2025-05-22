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

Route::get('/frontend', function () {
    return view('frontend');
});

Route::view('/blog', 'blog');
Route::view('/index', 'index');
Route::view('/index1', 'index1');
Route::view('/pertama', 'pertama');
Route::view('/pertemuan4', 'pertemuan4');
Route::view('/pertemuan7', 'pertemuan7');
Route::view('/styles', 'styles');
Route::view('/template1', 'template1');
