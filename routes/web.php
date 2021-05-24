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

//Route Untuk AskVet
Route::get('/askvet', function () {
    return view('ask-vet/askvet');
});
Route::get('/konsultasi', function () {
    return view('ask-vet/konsultasi');
});
