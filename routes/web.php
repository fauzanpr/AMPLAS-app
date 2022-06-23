<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Auth\LoginController;

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('auth._register');
})->middleware('guest');

Route::get('/', function () {
    return view('list_tukang');
})->middleware('guest');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group( function () {
        Route::get('/', [JobController::class, 'showCancellations']);


        Route::get('/pelaporan', [ReportController::class, 'index'])->name('reports.index');

        Route::get('/pelaporan/detail_pelaporan/{report}', [ReportController::class, 'show'])->name('reports.show');

        Route::get('/pembatalan', [JobController::class, 'showCancellations'])->name('cancel.index');

        Route::get('/pembatalan/detail_pembatalan/{job}', [JobController::class, 'showCancellationsDetail'])->name('cancel.detail');
        
        Route::post('/pembatalan/{id}/{status}', [JobController::class, 'updateStatusCancellation'])->name('cancel.update');

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
        Route::get('/edit_profile', function () {
            return view('tukang.edit_profile', [
                "title" => "Edit Profil"
            ]);
        })->name('tukang.edit_profil');
        Route::get('/masuk', function () {
            return view('tukang.jobMasuk', [
                "title" => "Pekerjaan Proses"
            ]);
        })->name('tukang.order_proses');
        Route::get('/selesai', function () {
            return view('tukang.jobTerselesaikan', [
                "title" => "Pekerjaan Selesai"
            ]);
        })->name('tukang.order_selesai');
        Route::get('/detail_job/1', function () {
            return view('tukang.detail_job', [
                "title" => "Pekerjaan Detail"
            ]);
        })->name('tukang.detail_job');
        Route::get('/detail_job_masuk/1', function () {
            return view('tukang.detail_job_masuk', [
                "title" => "Pekerjaan Masuk"
            ]);
        })->name('tukang.detail_job_masuk');
        Route::get('/portofolio', function () {
            return view('tukang.portofolio', [
                "title" => "Portofolio Detail"
            ]);
        })->name('tukang.portofolio');
        Route::get('/detail_portofolio/1', function () {
            return view('tukang.detail_portofolio', [
                "title" => "Portofolio Detail"
            ]);
        })->name('tukang.detail_portofolio');
        
        Route::get('/profile', function () {
            return view('tukang.profile', [
                "title" => "Profile"
            ]);
        })->name('tukang.profile');
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
                "title" => "Pekerjaan Proses"
            ]);
        })->name('klien.order_proses');
        Route::get('/selesai', function () {
            return view('klien.selesai', [
                "title" => "Pekerjaan Selesai"
            ]);
        })->name('klien.order_selesai');
        Route::get('/detail_job/1', function () {
            return view('klien.detail_job', [
                "title" => "Pekerjaan Detail"
            ]);
        })->name('klien.detail_job');
        
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