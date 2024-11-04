<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\waliKelasController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', [AuthenticatedSessionController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'login']);
Route::post('/logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');

Route::get('/spp', [SPPController::class, 'index'])->name('spp.index');
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/pengajar', [PengajarController::class, 'index'])->name('pengajar.index');
Route::get('/waliKelas', [waliKelasController::class, 'index'])->name('waliKelas.index');

Route::get('/', function () {
    return view('auth/login');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});
