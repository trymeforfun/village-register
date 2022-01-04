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
            $data = DB::table($layanan)->insert($params);
            Services::create($params);
            return response()->json([
                'data' => $data,
                'message' => 'data has been saved',
                'status code' => 200
            ], 200);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => $ex->getMessage(),
                'status code' => 500
            ], 500);
        }
    }
}
