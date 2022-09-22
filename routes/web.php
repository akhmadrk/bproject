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
Route::get('/beranda', function () {
    return view('front/beranda/index');
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

