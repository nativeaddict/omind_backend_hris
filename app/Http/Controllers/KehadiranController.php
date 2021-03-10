<?php

namespace App\Http\Controllers;

use App\Kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function tapIn(Request $request) {
        $data['id_karyawan'] = auth('karyawan')->id();

        $data['tap_in'] = now();
        Kehadiran::create($data);
        return response()->json([
            'status'    => 200,
            'message'   => 'Berhasil Melakukan Absen',
            'data'      => $data
        ]);
    }

    public function tapOut(Request $request) {
        $data['id_karyawan'] = auth('karyawan')->id();

        $data['tap_out'] = now();
        $kehadiran = Kehadiran::where([
            'id_karyawan'   => $data['id_karyawan'],
        ])->whereDate('tap_in','=',now()->format('Y-m-d'))->first();
        $kehadiran->update($data);
        return response()->json([
            'status'    => 200,
            'message'   => 'Berhasil Melakukan Absen',
            'data'      => $data
        ]);
    }
}
