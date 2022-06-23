<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.pembatalan', [
            "title" => "Pembatalan"
        ]);
    });
    Route::get('/pelaporan', function () {
        return view('admin.pelaporan', [
            "title" => "Pelaporan"
        ]);
    });
    Route::get('/pembatalan', function () {
        return view('admin.pembatalan', [
            "title" => "Pembatalan"
        ]);
    });
    Route::get('/pembayaran', function () {
        return view('admin.pembayaran', [
            "title" => "Pembayaran"
        ]);
    });
    Route::get('/pembayaran/detail_pembayaran', function () {
        return view('admin.detail_pembayaran', [
            "title" => "Pembayaran"
        ]);
    });
    Route::get('/pendaftaran', function () {
        return view('admin.pendaftaran', [
            "title" => "Pendaftaran"
        ]);
    });
    Route::get('/pendaftaran/detail_pendaftaran', function () {
        return view('admin.detail_pendaftaran', [
            "title" => "Pendaftaran"
        ]);
    });
});

Route::prefix('tukang')->group(function () {
    Route::get('/', function () {
        return view('tukang.jobMasuk', [
            "title" => "Job Masuk"
        ]);
    });
    Route::get('/profile_about', function () {
        return view('tukang.profile_about', [
            "title" => "Profile About"
        ]);
    });
    Route::get('/profile_portofolio', function () {
        return view('tukang.profile_portofolio', [
            "title" => "Profile Portofolio"
        ]);
    });
    Route::get('/profile_rating', function () {
        return view('tukang.profile_rating', [
            "title" => "Profile Rating"
        ]);
    });   
    Route::get('/profile', function () {
        return view('tukang.profile', [
            "title" => "Profile"
        ]);
    });
    Route::get('/jobMasuk', function () {
        return view('tukang.jobMasuk', [
            "title" => "Job Masuk"
        ]);
    });
    Route::get('/jobTerselesaikan', function () {
        return view('tukang.jobTerselesaikan', [
            "title" => "Job Terselesaikan"
        ]);
    });
});

Route::prefix('klien')->group(function () {
    Route::get('/profil', function () {
        return view('klien.profile', [
            "title" => "Profil"
        ]);
    });
    Route::get('/proses', function () {
        return view('klien.proses', [
            "title" => "Order Proses"
        ]);
    });
    Route::get('/selesai', function () {
        return view('klien.selesai', [
            "title" => "Order Selesai"
        ]);
    });
});

Route::get('/list', function () {
    return view('list_tukang');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
