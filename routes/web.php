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

Route::get('/url', function () {
    return view('link');
});

// Admmin
Route::get('/admin/dashboard', function () {
    return view('admin/index');
});

Route::get('/admin/artikel', function () {
    return view('admin/artikel');
});

Route::get('/admin/podcast', function () {
    return view('admin/podcast');
});

// Home
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

// Route::get('/komunitas','komunitasController@index');
// Route::get('/komunitas', [App\Http\Controllers\komunitasController::class, 'index']);

Route::get('/komunitas', function () {
    return view('komunitas/index');
});

Route::get('/komunitas/buat_pertanyaan', function () {
    return view('komunitas/create');
});

Route::get('/komunitas/detail_pertanyaan', function () {
    return view('komunitas/detail');
});

Route::get('/komunitas/balas_pertanyaan', function () {
    return view('komunitas/komentar');
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
Route::get('/penilaian', function () {
    return view('ask-vet/penilaian');
});

Route::get('/penilaian2', function () {
    return view('ask-vet/penilaian2');
});

//resep
Route::get('/resep', function () {
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

Route::get('/pesankonsul', function () {
    return view('ask-vet/pesankonsul');
});

Route::get('/rinciankonsul', function () {
    return view('ask-vet/rinciankonsul');
});

Route::get('/chatting', function () {
    return view('ask-vet/chatting');
});

Route::get('/riwayatkonsultasi', function () {
    return view('ask-vet/riwayatkonsultasi');
});

// Route Untuk register
Route::get('/register/PemilikHewan', function () {
    return view('registerPemilikHewan');
});

Route::get('/register/DokterHewan', function () {
    return view('registerDokterHewan');
});

// Route Untuk VetHouseLoc
Route::get('/vet-house-loc', function () {
    return view('vet-house-loc/vetHouseLoc');
});

Route::get('/info-klinik', function () {
    return view('vet-house-loc/info-klinik');
});

//VetUpdate
Route::get('/vetUpdate', function () {
    return view('vet-update/vetUpdate');
});

Route::get('vet-update/kategorikucing', function () {
    return view('vet-update/kategorikucing');
});

Route::get('vet-update/artikelkucing', function () {
    return view('vet-update/artikelkucing');
});

Route::get('vet-update/podcastkucing', function () {
    return view('vet-update/podcastkucing');
});

//DailyVet
Route::get('/daily-vet', function () {
    return view('daily-vet/dailyvet');
});


