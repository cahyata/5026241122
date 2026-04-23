<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
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
