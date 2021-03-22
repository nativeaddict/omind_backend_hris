<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function viewAgenda() {
        $data = Agenda::all();

        return response()->json([
            'status'    => 200,
            'message'   => 'Berhasil Menampilkan Agenda',
            'data'      => $data,
        ]);
    }
}
