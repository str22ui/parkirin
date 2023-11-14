<?php

use App\Http\Controllers\HalamanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HalamanController::class, 'index'])->name('halaman.index');
Route::get('/detail', [HalamanController::class, 'detail'])->name('detail.detail');
Route::get('/plat', [HalamanController::class, 'plat'])->name('plat.plat');
Route::get('/history', [HalamanController::class, 'history'])->name('history.history');
Route::get('/detPlat', [HalamanController::class, 'detPlat'])->name('detPlat.detPlat');
Route::get('/coba', [HalamanController::class, 'coba']);
Route::get('/nav', [HalamanController::class, 'nav']);
