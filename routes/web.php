<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TrukDBController;
// import java.io; (sama kayak use)

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/indexLinktree', function () {
    return view('indexLinktree');
});

Route::get('/ETS', function () {
    return view('ETS');
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

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

//Route::get('pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route TrukDB
Route::get('/truk', [TrukDBController::class, 'index']);
Route::get('/truk/tambah', [TrukDBController::class, 'tambah']);
Route::post('/truk/store', [TrukDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/truk/edit/{id}',[TrukDBController::class, 'edit']);
Route::post('/truk/update',[TrukDBController::class, 'update']);
Route::get('/truk/hapus/{id}', [TrukDBController::class, 'hapus']);

Route::get('/truk/cari', [TrukDBController::class, 'cari']);
