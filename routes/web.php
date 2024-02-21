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

Route::get('/pegawai/dashboard',[PegawaiController::class, 'index']);
 //
 Route::get('/pegawai/dashboard',[DashboardController::class, 'index']);
 Route::get('/pegawai/pemasukan',[PemasukanController::class, 'index'])->name('pemasukan');
 Route::get('/pegawai/pengeluaran',[PengeluaranController::class, 'index'])->name('pengeluaran');

 Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

 Route::get('/pemasukan/create', [PemasukanController::class, 'create'])->name('pemasukan/create');
 Route::get('/pengeluaran/create', [PengeluaranController::class, 'create'])->name('pengeluaran/create');

//  Route::get('/pemasukan/cetakpemasukan', [PemasukanController::class, 'cetakpemasukan'])->name('pemasukan/cetakpemasukan');
Route::get('/pemasukan/cetakpemasukan', [PemasukanController::class, 'cetakpemasukan']);
 Route::get('/pengeluaran/cetakpengeluaran', [PengeluaranController::class, 'cetakpengeluaran'])->name('pengeluaran/cetakpengeluaran');

 Route::get('pemasukan',[PemasukanController::class, 'index']);
 Route::get('pengeluaran',[PengeluaranController::class, 'index']);
 Route::get('/pemasukan/edit', [PemasukanController::class, 'edit'])->name('pemasukan/edit');
 Route::post('pemasukan/store', [PemasukanController::class, 'store'])->name('pemasukan/store');
 Route::post('pengeluaran/store', [PengeluaranController::class, 'store'])->name('pengeluaran/store');
 Route::delete('/pemasukan/{id}', [PemasukanController::class, 'delete'])->name('pemasukan.delete');
