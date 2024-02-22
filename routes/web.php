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
use App\Http\Controllers\PemasukanController;
 

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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/datakategori',[DatakategoriController::class, 'index']);
Route::get('/dashboard/admin', [AdminController::class, 'indexPembayaran'])->name('admin.dashboard');

// buat pemilik
Route::get('/pemilik', [PemilikController::class, 'index']);
Route::get('/pemilik/dashboard', [DashboardController::class, 'index'])->name('dashboardpm.index');
Route::get('/pemilik/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/pemilik/pemasukan', [PemasukanController::class, 'index'])->name('pemasukanpm.index');
Route::get('/pemilik/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaranpm.index');

// buat kasir
Route::get('/kasir', [KasirController::class, 'index']);
