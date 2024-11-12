<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

// Resource routes
Route::resource('members', MemberController::class);
Route::resource('activities', ActivityController::class);
Route::resource('attendances', AttendanceController::class)->only(['index', 'store']);

// Halaman Pendaftaran
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});
Route::get('/pendaftaran/sukses', function () {
    return view('pendaftaran_sukses');
})->name('pendaftaran.sukses');

// Halaman Data Pendaftaran dengan kode unik
Route::get('/pendaftaran/reports/{key}', function ($key) {
    if ($key !== '120502rens') { // Ganti '12345XYZ' dengan kode unik yang Anda inginkan
        abort(404); // Jika kodenya salah, berikan respons 404
    }

    return app(App\Http\Controllers\PendaftaranController::class)->index();
})->name('pendaftaran.data');

// Home route
Route::get('/', [HomeController::class, 'index']);
