<?php

namespace App\Http\Controllers;

use App\TotalGaji;
use App\Tunjangan;
use Illuminate\Http\Request;

class TotalGajiController extends Controller
{
    public function totalGaji() {
        $userLogin = auth('karyawan')->id();

        $gaji = TotalGaji::where('id_karyawan', $userLogin)->whereMonth('tgl_gajian','=',now()->format('m'))
            ->first(['jumlah_tunjungan','gaji_pokok']);

        if ($gaji) {
            $tunjangan = $gaji->jumlah_tunjungan;
            $totalgaji = $gaji->total_gaji;
            $total = $tunjangan + $totalgaji;

            return response()->json([
                'status'    => 200,
                'message'   => 'Slip gaji berhasil ditampilkan',
                'data'      => $total
            ]);
        } else {
            return response()->json([
                'status'    => 200,
                'message'   => 'Anda belum menerima gaji bulan ini',
            ]);
        }

    }
}
