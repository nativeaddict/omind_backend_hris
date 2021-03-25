<?php

namespace App\Http\Controllers;

use App\TotalGaji;
use App\Tunjangan;
use Illuminate\Http\Request;

class TotalGajiController extends Controller
{
    public function totalGaji() {
        $userLogin = auth('karyawan')->id();

        $tunjangan = Tunjangan::where('id_karyawan', $userLogin)->get(['jumlah_tunjangan']);
        $totalgaji = TotalGaji::where('id_karyawan', $userLogin)->get(s);

        return response()->json([
            'status'    => 200,
            'message'   => 'Slip gaji berhasil ditampilkan',
            'data'      => $tunjangan, $totalgaji
        ]);
    }
}
