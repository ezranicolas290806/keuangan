<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

Route::get('/layanan', [LayananController::class, 'index']);
    Route::get('/layanan/{id}', [LayananController::class, 'show']);
    Route::post('/layanan', [LayananController::class, 'store']);
    Route::put('/layanan/{id}', [LayananController::class, 'update']);
    Route::delete('/layanan/{id}', [LayananController::class, 'destroy']);

});
