<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//pertemuan 1
Route::get('intro', [TugasController::class, 'intro']);

//pertemuan 2
Route::get('news', [TugasController::class, 'news']);
Route::get('news1', [TugasController::class, 'news1']);

//pertemuan 3
Route::get('responsive', [TugasController::class, 'responsive']);
Route::get('template', [TugasController::class, 'template']);
Route::get('tugaspertemuan3', [TugasController::class, 'tugaspertemuan3']);

//pertemuan 4
Route::get('tugaspertemuan4', [TugasController::class, 'tugaspertemuan4']);

//pertemuan 5
Route::get('index', [TugasController::class, 'index']);
Route::get('pertemuan5', [TugasController::class, 'pertemuan5']);

//pertemuan 5 dan 6
Route::get('linktree', [TugasController::class, 'linktree']);

//halaman menu
Route::get('menu', [TugasController::class, 'menu']);



Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']); //jangan lupa diganti
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


//route CRUD tabel pegawai
Route::get('/pegawai',[PegawaiDBController::class, 'index']);

Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

