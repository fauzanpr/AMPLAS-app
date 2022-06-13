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

Route::get('/', function () {
    return view('list_tukang');
});

Route::post('logout', [LoginController::class, 'logout']);

Route::middleware(['auth', 'role:admin'])->group(function () {
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
        Route::get('/pelaporan/detail_pelaporan', function () {
            return view('admin.detail_pelaporan', [
                "title" => "Pelaporan"
            ]);
        });
        Route::get('/pembatalan', function () {
            return view('admin.pembatalan', [
                "title" => "Pembatalan"
            ]);
        });
        Route::get('/pembatalan/detail_pembatalan', function () {
            return view('admin.detail_pembatalan', [
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
        Route::get('/portofolio', function () {
            return view('admin.portofolio', [
                "title" => "Portofolio"
            ]);
        }); 
        Route::get('/portofolio/detail_portofolio', function () {
            return view('admin.detail_portofolio', [
                "title" => "Portofolio"
            ]);
        });
    });
});

Route::middleware(['auth', 'role:pekerja'])->group(function() {  
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
});


Route::get('/list-tukang', function () {
    return view('list_tukang');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');