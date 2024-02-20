<?php
use App\Http\Controllers\DatakategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\pemilikController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\DashboardController;
 

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

// Route::get('/', function ) {
//     return view('welcome');
// };

Route::get('/', [DashboardController::class, 'index'])->name('login');
Route::get('/', [DashboardController::class, 'index']);
Route::get('/datakategori',[DatakategoriController::class, 'index']);
Route::get('/dashboard/admin', [AdminController::class, 'indexPembayaran'])->name('admin.dashboard');
Route::get('/pemilik', [PemilikController::class, 'index']);