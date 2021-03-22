<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function viewNews() {
        $berita = Berita::all();

        return response()->json([
            'status'    => 200,
            'message'   => 'Berita berhasil ditampilkan',
            'data'      => $berita
        ]);
    }
}
