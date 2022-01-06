<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
     public function storeKtp(Request $request)
     {    
          return $this->storeData($request, 'ktp');
     }
     public function storeKk(Request $request)
     {
          return $this->storeData($request, 'kk');
     }
     public function storeSuratPindah(Request $request)
     {
          return $this->storeData($request, 'surat_pindah');
     }
     public function storeSuratDomisili(Request $request)
     {
          return $this->storeData($request, 'surat_domisili');
     }
     public function storeSuratKeteranganTidakMampu(Request $request)
     {
          return $this->storeData($request, 'surat_keterangan_tidak_mampu');
     }
     public function storeSuratIzinUsaha(Request $request)
     {
          return $this->storeData($request, 'surat_izin_usaha');
     }
     public function storeSuratKematian(Request $request)
     {
          return $this->storeData($request, 'surat_kematian');
     }

     public function detail(Request $request)
     {
         $serv =  str_replace(' ', '_', $request->layanan);
          $data = DB::table($serv)->where('id', $request->id)->where('user_id', $request->user_id)->first();
          $user = User::findOrFail($request->user_id);
          return view('client.detail.template', compact('data', 'user'));
     }
}
