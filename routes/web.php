<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LogoutController;


use Illuminate\Support\Facades\Route;


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



Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/pegawai/dashboard',[PegawaiController::class, 'index']);
 //
 Route::get('/pegawai/dashboard',[DashboardController::class, 'index']);
 Route::get('/pegawai/pemasukan',[PemasukanController::class, 'index']);
 Route::get('/pegawai/pengeluaran',[PengeluaranController::class, 'index']);

 Route::post('/logout',[LogoutController::class,'logout'])->name('logout');



