<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KabelController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\NilaiKuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('index', function () {
	return view('index');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('prt6', function () {
	return view('linktree');
});

Route::get('prt5', function () {
	return view('pertemuan5');
});

Route::get('prt4', function () {
	return view('week4');
});

Route::get('prt3', function () {
	return view('responsive');
});

Route::get('prt2', function () {
    return view('news1');
});

Route::get('prt1', function () {
    return view('intro');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);
//form
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);



//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'index2']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD kabel
Route::get('/kabel', [KabelController::class, 'index'])->name('kabel.index');
Route::get('/kabel/create', [KabelController::class, 'create'])->name('kabel.create');
Route::post('/kabel', [KabelController::class, 'store'])->name('kabel.store');
Route::get('/kabel/{id}/edit', [KabelController::class, 'edit'])->name('kabel.edit');
Route::put('/kabel/{id}', [KabelController::class, 'update'])->name('kabel.update');
Route::delete('/kabel/{id}', [KabelController::class, 'destroy'])->name('kabel.destroy');
Route::get('/kabel/cari',[KabelController::class, 'cari'])->name('kabel.cari');

//route CRUD keranjang soal laki-laki
Route::get('/keranjangbelanja', [KeranjangController::class, 'index'])->name('keranjangbelanja.index');
Route::get('/keranjangbelanja/create', [KeranjangController::class, 'create'])->name('keranjangbelanja.create');
Route::post('/keranjangbelanja', [KeranjangController::class, 'store'])->name('keranjangbelanja.store');
Route::delete('/keranjangbelanja/{id}', [KeranjangController::class, 'destroy'])->name('keranjangbelanja.destroy');

//route CRUD nilai kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiKuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');
