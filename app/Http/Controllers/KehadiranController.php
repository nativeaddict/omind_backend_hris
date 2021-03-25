<?php

namespace App\Http\Controllers;

use App\Kehadiran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function tapIn(Request $request) {
        $data['id_karyawan'] = auth('karyawan')->id();      //mengambil id yang sedang login
        $data['tap_in'] = now();
        Kehadiran::create($data);
        return response()->json([
            'status'    => 200,
            'message'   => 'Berhasil Melakukan Absen',
            'data'      => $data
        ]);
    }

    public function tapOut(Request $request) {
        $data = $this->validate($request,[
            'feel'  => 'required'
        ],[
            'required'  => ':attribute harus diisi'
        ],[
            'feel'      => 'Feel'
        ]);
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

    public function historyPresensi() {
        $userLogin = auth('karyawan')->user();

        $data = Kehadiran::where('id_karyawan',$userLogin->id)->get(['tap_in','tap_out'])->toArray();
        $data = array_map(function($v){
            $tap_in = strtotime($v['tap_in']);
            $tap_in = new Carbon($tap_in);
            $v['tanggal'] = $tap_in->format('M Y');
            $tap_in = $tap_in->format('H:i');
            $v['tap_in'] = $tap_in;
            $tap_out = strtotime($v['tap_out']);
            $tap_out = new Carbon($tap_out);
            $tap_out = $tap_out->format('H:i');
            $v['tap_out'] = $tap_out;
        
            return $v;
        },$data);
        
        return response()->json([
            'status'        => 200,
            'message'       => 'History Presensi Berhasil Ditampilkan',
            'user'          => $userLogin,
            'data'          => $data
        ]);
    }

    public function avgPresensi() {
        $userLogin = auth('karyawan')->id();

        
    }
}
