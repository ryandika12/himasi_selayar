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
Route::resource('members', MemberController::class);
Route::resource('activities', ActivityController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('attendances', AttendanceController::class)->only(['index', 'store']);

Route::resource('members', MemberController::class);


Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});


Route::get('/pendaftaran/sukses', function () {
    return view('pendaftaran_sukses');
})->name('pendaftaran.sukses');


Route::get('/pendaftaran/data', [PendaftaranController::class, 'index'])->name('pendaftaran.data');//////////////////////////////////////



Route::get('/', [HomeController::class, 'index']);



