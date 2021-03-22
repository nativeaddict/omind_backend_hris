<?php

namespace App\Http\Controllers;

use App\Tunjangan;
use Illuminate\Http\Request;

class TunjanganController extends Controller
{
    public function viewTunjangan() {
        $tunjangan = Tunjangan::all();
        
        return response()->json([
            'status'    => 200,
            'message'   => 'Tunjangan Berhasil di Tampilkan',
            'data'      => $tunjangan
        ]);
    }
}
