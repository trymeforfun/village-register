<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function storeData(Request $req, String $layanan)
    {
        try {
            $params = $req->except('_token');
            if (array_key_exists('kk_img', $params)) {
                if (!empty($params['kk_img'])) {
                    $imagePath = $params['kk_img'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['kk_img'] = $path;
                }
            }

            if (array_key_exists('poto', $params)) {
                if (!empty($params['poto'])) {
                    $imagePath = $params['poto'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['poto'] = $path;
                }
            }

            if (array_key_exists('ttd', $params)) {
                if (!empty($params['ttd'])) {
                    $imagePath = $params['ttd'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['ttd'] = $path;
                }
            }

            if (array_key_exists('ktp_img', $params)) {
                if (!empty($params['ktp_img'])) {
                    $imagePath = $params['ktp_img'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['ktp_img'] = $path;
                }
            }

            if (array_key_exists('ktp_mayat_img', $params)) {
                if (!empty($params['ktp_mayat_img'])) {
                    $imagePath = $params['ktp_mayat_img'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['ktp_mayat_img'] = $path;
                }
            }

            if (array_key_exists('kk_mayat_img', $params)) {
                if (!empty($params['kk_mayat_img'])) {
                    $imagePath = $params['kk_mayat_img'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['kk_mayat_img'] = $path;
                }
            }

            if (array_key_exists('ttd_pemohon', $params)) {
                if (!empty($params['ttd_pemohon'])) {
                    $imagePath = $params['ttd_pemohon'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['ttd_pemohon'] = $path;
                }
            }

            if (array_key_exists('ttd_saksi', $params)) {
                if (!empty($params['ttd_saksi'])) {
                    $imagePath = $params['ttd_saksi'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['ttd_saksi'] = $path;
                }
            }

            if (array_key_exists('usaha_img', $params)) {
                if (!empty($params['usaha_img'])) {
                    $imagePath = $params['usaha_img'];
                    $imageName = $imagePath->getClientOriginalName();

                    $path = $imagePath->storeAs('uploads', $imageName, 'public');
                    $path = '/storage/' . $path;
                    $params['usaha_img'] = $path;
                }
            }

            if (!empty($params['pengantar_rt_img'])) {
                $imagePath = $params['pengantar_rt_img'];
                $imageName = $imagePath->getClientOriginalName();

                $path = $imagePath->storeAs('uploads', $imageName, 'public');
                $path = '/storage/' . $path;
                $params['pengantar_rt_img'] = $path;
            }

            if (array_key_exists('nama_anggota_keluarga', $params)) {
                for ($i = 0; $i < count($params['nama_anggota_keluarga']); $i++) {
                    if ( array_key_exists('tempat_lahir_anggota_keluarga', $params) and $params['tempat_lahir_anggota_keluarga']) {
                        $params['data_anggota_keluarga'][] = [
                            'nama' => $params['nama_anggota_keluarga'][$i],
                            'tempat_lahir' => $params['tempat_lahir_anggota_keluarga'][$i],
                            'tanggal_lahir' => $params['tanggal_lahir_anggota_keluarga'][$i],
                            'pekerjaan' => $params['pekerjaan_anggota_keluarga'][$i],
                        ];
                        // array_diff($params, ['nama_anggota_keluarga', 'tempat_lahir_anggota_keluarga', 'tanggal_lahir_anggota_keluarga', 'pekerjaan_anggota_keluarga']);
                    } else {
                        $params['data_anggota_keluarga'][] = ['nama' => $params['nama_anggota_keluarga'][$i]];
                        // array_diff($params, ['nama_anggota_keluarga']);
                    }
                }
            }
            unset($params['nama_anggota_keluarga']);
            unset($params['tempat_lahir_anggota_keluarga']);
            unset($params['tanggal_lahir_anggota_keluarga']);
            unset($params['pekerjaan_anggota_keluarga']);
            if (array_key_exists('data_anggota_keluarga', $params)) {
                # code...
                $params['data_anggota_keluarga'] = json_encode($params['data_anggota_keluarga']);
            }
            // dd($params);
            // return $layanan;
            $layanan = DB::table($layanan)->insertGetId($params);
            $params['layanan_id'] = $layanan;
            Services::create($params);
            return redirect(route('welcome'))->with('success', 'data berhasil dikirim');
        } catch (\Exception $ex) {
            return response()->json([
                'message' => $ex->getMessage(),
                'line' => $ex->getLine(),
                'status code' => 500
            ], 500);
        }
    }
}
