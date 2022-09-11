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

Route::get('dashboard', function() {
    return view('dashboard');
});

Route::get('/', function() {
    return view('auth.login');
});

Route::get('registration', function() {
    return view('auth.registration');
});

Route::get('suratmasuk', function() {
    return view('suratmasuk');
});

Route::get('suratkeluar', function() {
    return view('suratkeluar');
});

Route::get('profile', function() {
    return view('profile');
});

Route::get('reportsuratmasuk', function() {
    return view('reportmasuk');
});

Route::get('reportsuratkeluar', function() {
    return view('reportkeluar');
});

Route::get('temp', function() {
    return view('temp');
});