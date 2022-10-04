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
Route::get('/form', function () {
    return view('front/pelayanan/form');
});
Route::get('/', function () {
    return view('front/beranda/index');
});
Route::get('/berita', function () {
    return view('front/berita/index');
});
Route::get('/detail', function () {
    return view('front/berita/detail');
});
Route::get('/profil', function () {
    return view('front/profil/index');
});
Route::get('/galeri', function () {
    return view('front/galeri/index');
});
Route::get('/kontak', function () {
    return view('front/kontak/index');
});
Route::get('/pelayanan', function () {
    return view('front/pelayanan/index');
});
Route::get('/admin', function () {
    return view('admin/dashboard/index');
});
Route::get('/admin/approval/', function () {
    return view('admin/approval/index');
});
Route::get('/admin/prodeskel/', function () {
    return view('admin/prodeskel/index');
});
Route::get('/admin/pendukung', function () {
    return view('admin/pendukung/index');
});
Route::get('/admin/prodeskel/form', function () {
    return view('admin/prodeskel/form');
});
Route::get('/admin/prodeskel/keluarga', function () {
    return view('admin/prodeskel/keluarga');
});
Route::get('/admin/prodeskel/anggota', function () {
    return view('admin/prodeskel/anggota');
});
Route::get('/admin/galeri', function () {
    return view('admin/galeri/index');
});
Route::get('/admin/galeri/form', function () {
    return view('admin/galeri/form');
});
Route::get('/admin/berita', function () {
    return view('admin/berita/index');
});
Route::get('/admin/user', function () {
    return view('admin/user/index');
});