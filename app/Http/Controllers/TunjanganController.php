<?php

namespace App\Http\Controllers;

use App\Tunjangan;
use Illuminate\Http\Request;

class TunjanganController extends Controller
{
    public function viewTunjangan() {
        $userLogin = auth('karyawan')->user();
        
        $tunjangan = Tunjangan::where('id_karyawan', $userLogin->id)->get();
        
        return response()->json([
            'status'    => 200,
            'message'   => 'Tunjangan Berhasil di Tampilkan',
            'data'      => $tunjangan
        ]);
    }
}
