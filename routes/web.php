<?php

use App\Http\Controllers\MainController;
use App\Mail\FeedbackDocument;
use App\Models\User;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
})->middleware(['auth'])->name('welcome');

Route::get('/dashboard', function () {
    $users = User::with(['services'])->whereHas('roles', function ($query)
    {
        $query->where('name', 'user');
    })->get();
    return view('dashboard', compact('users'));
})->middleware(['auth', 'role:admin'])->name('dashboard');
Route::get('detail', [MainController::class, 'detail'])->middleware(['auth', 'role:admin'])->name('detail-pasien');
# return view in every single client form
Route::group(['middleware' => 'auth'], function () {
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
});

Route::get('/test', function ()
{   
    $user = User::find(3);
    $data = DB::table('ktp')->where('user_id', 3)->first();
    // return view('document');
    $pdf = PDF::loadView('document', compact('user', 'data'));
        $pdf->setPaper('A4', 'portrait');
        $pdf->setOption('margin-top', 5);
        $pdf->setOption('margin-right', 0);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('margin-left', 0);
  return  $pdf->stream();
});

Route::get('send-email', function (Request $request)
{
    try {
        $user = User::find($request->user_id);
        $layanan = DB::table(str_replace(' ', '_', $request->layanan))->where('user_id', $user->id)->first();
        // return $user;
        $message = new FeedbackDocument($user, $layanan);
        Mail::to('okkykurniawan.716@gmail.com')->send($message);
        return back()->with('success', 'berkas berhasil dikirim');
    } catch (\Exception $ex) {
        return $ex;
    }

})->name('send-email');

require __DIR__ . '/auth.php';
