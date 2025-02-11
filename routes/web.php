<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('welcome');
});

Route::get('/download', function () {
    return view('home/download');
});

Route::get('/bimbingan', function () {
    return view('home/bimbingan');
});

Route::get('/informasi', function () {
    return view('home/informasi');
});

Route::get('/laporan', function () {
    return view('home/laporan');
});

Route::get('/logbook', function () {
    return view('home/logbook');
});

Route::get('/pengajuan', function () {
    return view('home/pengajuan');
});

Route::get('/profil', function () {
    return view('home/profil');
});

Route::get('/tes', function () {
    return view('home/tes');
});




/*

| Jangan lupa php artisan route:clear

*/