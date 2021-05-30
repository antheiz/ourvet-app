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
    return view('index');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', function () {
    return view('register');
});

// Komunitas
Route::get('/komunitas', function () {
    return view('komunitas/index');
});

Route::get('/komunitas/buat_pertanyaan', function () {
    return view('komunitas/create');
});

Route::get('/komunitas/detail_pertanyaan', function () {
    return view('komunitas/detail');
});



//pembayaran
Route::get('/pembayaran', function () {
    return view('pembayaran/index');
});

Route::get('/pembayaran1', function () {
    return view('pembayaran/pembayaran');
});

Route::get('/pembayaran2', function () {
    return view('pembayaran/pembayaran2');
});

//penilaian
Route::get('/ask-vet/penilaian', function () {
    return view('ask-vet/penilaian');
});

Route::get('/ask-vet/penilaian2', function () {
    return view('ask-vet/penilaian2');
});

//resep
Route::get('/ask-vet/resep', function () {
    return view('ask-vet/resep');
});

//menambah catatan kesehatan hewan
Route::get('/my-vet', function () {
    return view('my-vet/myvet');
});

//halaman tambah catatan kesehatan hewan 2
Route::get('/my-vet/tambahcatatan', function () {
    return view('my-vet/tambahcatatan2');
});

//Route Untuk AskVet
Route::get('/ask-vet', function () {
    return view('ask-vet/askvet');
});
Route::get('/konsultasi', function () {
    return view('ask-vet/konsultasi');
});

// Route Untuk register
Route::get('/registerPemilikHewan', function () {
    return view('registerPemilikHewan');
});

Route::get('/registerDokterHewan', function () {
    return view('registerDokterHewan');
});

