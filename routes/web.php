<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

# return view in every single client form
Route::view('/ktp', 'client.ktp');
Route::view('/kk', 'client.kk');
Route::view('/surat-keterangan-usaha', 'client.surat-keterangan-usaha');
Route::view('/surat-domisili', 'client.surat-domisili');
Route::view('/surat-pindah', 'client.surat-pindah');
Route::view('/surat-kematian', 'client.surat-kematian');
Route::view('/surat-nikah', 'client.surat-nikah');
Route::view('/surat-keterangan-tidak-mampu', 'client.surat-keterangan-tidak-mampu');
Route::view('/surat-ahli-waris', 'client.surat-ahli-waris');

# Store data to database
Route::post('/ktp', [MainController::class, 'storeKtp']);
Route::post('/kk', [MainController::class, 'storeKk']);
Route::post('/surat-domisili', [MainController::class, 'storeSuratDomisili']);
Route::post('/surat-keterangan-usaha', [MainController::class, 'storeSuratIzinUsaha']);
Route::post('/surat-pindah', [MainController::class, 'storeSuratPindah']);
Route::post('/surat-keterangan-tidak-mampu', [MainController::class, 'storeSuratKeteranganTidakMampu']);
Route::post('/surat-kematian', [MainController::class, 'storeSuratKematian']);

require __DIR__ . '/auth.php';
