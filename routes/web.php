<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\UtamaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PassuserController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Dashboard1Controller;
use App\Http\Controllers\UserProfilController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\UserLaporanController;
use App\Http\Controllers\UserSarprasController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\UserDataGuruController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AdminKatlapController;
use App\Http\Controllers\AdminTaController;
use App\Http\Controllers\AnggaranBosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDataSiswaController;
use App\Http\Controllers\TampilMadrasahController;
use App\Http\Controllers\UserAkreditasiController;
use App\Http\Controllers\TampilDetailMadrasahController;
use App\Http\Controllers\TerbitBeritaController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/berita', [TerbitBeritaController::class, 'index']);
Route::get('/berita/{id}', [TerbitBeritaController::class, 'tampilberita']);
Route::get('/mdr/{madrasah}', [TampilMadrasahController::class, 'tampil']);
Route::get('/mdr/{madrasah}/{id}', [TampilDetailMadrasahController::class, 'index']);
Route::get('/mdr/{madrasah}/{id}/{tahun}', [TampilDetailMadrasahController::class, 'tabelsiswa']);
Route::get('/registration', [DaftarController::class, 'index'])->name('daftar')->middleware('guest');
Route::post('/registration', [DaftarController::class, 'daftar']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
// USER DASHBOARD
Route::get('/dashboard', [Dashboard1Controller::class, 'index'])->middleware('auth');
Route::get('/dashboard/tabelsiswa/{tahun}', [Dashboard1Controller::class, 'tabelsiswa'])->middleware('auth');
Route::get('/dashboard/passuser', [PassuserController::class, 'index'])->middleware('auth');
Route::post('/ubahpassword', [PassuserController::class, 'ubah'])->middleware('auth');
// USER SIDEBAR
Route::resource('/dashboard/dtguru', UserDataGuruController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/dtsiswa', UserDataSiswaController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/akreditasi', UserAkreditasiController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/sarpras', UserSarprasController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/profil', UserProfilController::class)->only(['edit', 'update'])->middleware('auth');
Route::resource('/dashboard/laporan', UserLaporanController::class)->middleware('auth');
// ADMIN DASHBOARD
Route::get('/admin', [AdministratorController::class, 'index'])->middleware('auth');
Route::get('/admin/laporan', [AdminLaporanController::class, 'index'])->middleware('auth');
Route::get('/admin/laporan/{id}', [AdminLaporanController::class, 'download'])->middleware('auth');
Route::get('/admin/laporan/tampil/{thn}/{jenis}/{jenjang}/{status}', [AdminLaporanController::class, 'tampilkan'])->middleware('auth');
Route::get('/admin/laporan/download/semua', [AdminLaporanController::class, 'downloadsemua'])->middleware('auth');
Route::get('/admin/bos', [AnggaranBosController::class, 'index'])->middleware('auth');
Route::resource('/admin/pos', AdminBeritaController::class)->middleware('auth');
Route::resource('/admin/users', AdminUserController::class)->middleware('auth');
Route::resource('/admin/ta', AdminTaController::class)->middleware('auth');
Route::resource('/admin/katlap', AdminKatlapController::class)->middleware('auth');
