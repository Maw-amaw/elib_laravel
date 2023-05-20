<?php

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
// login dan register
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/', function () {
    return view('welcome');
})->name('wellcome');
// master
Route::get('/siswa', function () {
    return view('master_siswa');
})->name('siswa');
Route::get('/kelas', function () {
    return view('master_kelas');
})->name('kelas');
Route::get('/semester', function () {
    return view('master_semester');
})->name('semester');
Route::get('/Rakbuku', function () {
    return view('master_Rakbuku');
})->name('Rakbuku');
Route::get('/bahasa', function () {
    return view('master_bahasa');
})->name('bahasa');
Route::get('/buku', function () {
    return view('master_buku');
})->name('buku');

// edit dan tambah data
Route::get('/create_kelas', function () {
    return view('kelas/create');
})->name('create_kelas');
Route::get('/update_kelas', function () {
    return view('kelas/update');
})->name('update_kelas');
Route::get('/create_siswa', function () {
    return view('siswa/create');
})->name('create_siswa');
Route::get('/update_siswa', function () {
    return view('siswa/update');
})->name('update_siswa');