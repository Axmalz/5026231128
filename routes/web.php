<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
// import java.io; (sama kayak use)

// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

//route blog
// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('satu', function () {
	return view('pertama');
});

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/ETS', function () {
    return view('ETS');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('/pertemuan7', function () {
    return view('pertemuan7');
});

Route::get('/template1', function () {
    return view('template1');
});

Route::get('/template1', function () {
    return view('template1');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);


//Route::get('pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
