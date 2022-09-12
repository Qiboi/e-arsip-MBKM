<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\ReportMasukController;
use App\Http\Controllers\ReportKeluarController;


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

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');

Route::get('suratmasuk', [SuratMasukController::class, 'index'])->name('suratmasuk');

Route::get('suratkeluar', [SuratKeluarController::class, 'index'])->name('suratkeluar');

Route::get('reportsuratmasuk', [ReportMasukController::class, 'index'])->name('reportmasuk');

Route::get('reportsuratkeluar', [ReportKeluarController::class, 'index'])->name('reportkeluar');

Route::get('/', function() {
    return view('auth.login');
});

Route::get('registration', function() {
    return view('auth.registration');
});

Route::get('temp', function() {
    return view('temp');
});