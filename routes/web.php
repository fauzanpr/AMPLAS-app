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

Route::prefix('admin')->group( function () {
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

Route::prefix('tukang')->group( function () {
    Route::get('/', function () {
        return view('tukang.profile_about');
    });
    Route::get('/profile_about', function () {
        return view('tukang.profile_about');
    });
    Route::get('/profile_portofolio', function () {
        return view('tukang.profile_portofolio');
    });
    Route::get('/profile_rating', function () {
        return view('tukang.profile_rating');
    });
});

    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login');