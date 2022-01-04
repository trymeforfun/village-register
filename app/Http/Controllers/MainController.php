<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
