<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KtpController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('v_dashboard');
})->middleware(['auth'])->name('v_dashboard');

Route::get('/penduduk', [KtpController::class, 'index'])->middleware(['auth']);
Route::get('/tambah-penduduk', [KtpController::class, 'tambah'])->middleware(['auth']);
Route::post('/add-process', [KtpController::class, 'addProcess']);
Route::get('/edit-penduduk/{id}', [KtpController::class, 'editEmployee'])->middleware(['auth']);
Route::get('/delete-penduduk/{id}', [KtpController::class, 'hapusPenduduk'])->middleware(['auth']);
Route::get('/detail-penduduk/{id}', [KtpController::class, 'detailPenduduk'])->middleware(['auth']);
Route::post('/edit-penduduk', [KtpController::class, 'editProcess']);
Route::get('/export-csv', [KtpController::class, 'exportCSV'])->middleware(['auth']);
Route::get('/export-pdf', [KtpController::class, 'exportPDF'])->middleware(['auth']);
Route::get('/import-form', [KtpController::class, 'importForm'])->middleware(['auth']);
Route::post('/import', [KtpController::class, 'importProcess']);
Route::get('/user-activity', [KtpController::class, 'aktivitasUser']);

require __DIR__.'/auth.php';
