<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

Route::post('logout', [LoginController::class, 'logout']);

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

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

Route::middleware(['auth', 'role:pengguna'])->group(function() { 
    Route::prefix('klien')->group(function () {
        Route::get('/list-tukang', function () {
            return view('klien.list_tukang', [
                "title" => "Tukang"
            ]);
        })->name('klien.list_tukang');
        Route::get('/edit_profile', function () {
            return view('klien.edit_profile', [
                "title" => "Edit Profil"
            ]);
        })->name('klien.edit_profil');
        Route::get('/proses', function () {
            return view('klien.proses', [
                "title" => "Order Proses"
            ]);
        })->name('klien.order_proses');
        Route::get('/selesai', function () {
            return view('klien.selesai', [
                "title" => "Order Selesai"
            ]);
        })->name('klien.order_selesai');
        
        Route::get('/profile', function () {
            return view('klien.profile', [
                "title" => "Profile"
            ]);
        })->name('klien.profile');
        Route::get('/tukang/profile_about', function () {
            return view('klien.tukang.profile_about', [
                "title" => "Tukang Profil"
            ]);
        })->name('klien.tukang.about');
        Route::get('/tukang/profile_portofolio', function () {
            return view('klien.tukang.profile_portofolio', [
                "title" => "Tukang Portofolio"
            ]);
        })->name('klien.tukang.portofolio');
        Route::get('/tukang/profile_rating', function () {
            return view('klien.tukang.profile_rating', [
                "title" => "Tukang Rating"
            ]);
        })->name('klien.tukang.rating');
    });
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');