<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function viewAgenda() {
        $data = Agenda::orderBy('id','desc')->first();

        $tgl = strtotime($data['tgl_agenda']);
        $tgl = new Carbon($tgl);
        $tgl = $tgl->format('l, d M Y');
        $data['tgl_agenda'] = $tgl;

        return response()->json([
            'status'    => 200,
            'message'   => 'Berhasil Menampilkan Agenda',
            'data'      => $data, 
        ]);
    }
}
