<?php

namespace App\Http\Controllers\Admins;

use App\Agenda;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminAgendaController extends Controller
{
    public function index() {
        $data = Agenda::where('tgl_agenda', '>', date('Y-m-d').' 00:00:00')
            ->orderBy('tgl_agenda','asc')
            ->get()
            ->toArray();
        $data = array_map(function($v){
            $v['tgl_agenda'] = strtotime($v['tgl_agenda']);
            $v['tgl_agenda'] = new Carbon($v['tgl_agenda']);
            $v['tgl_agenda'] = $v['tgl_agenda']->format('l, d M Y');
            return $v;
        },$data);

        return view('agenda_view',compact('data'));
    }

    public function submitAgenda(Request $request) {
        $data = $this->validate($request, [
            'judul_agenda'  => 'required',
            'jenis_agenda'  => 'required',
            'tgl_agenda'    => 'required',
            'jam_agenda'    => 'required'
        ],[
            'required'      => ':attribute harus diisi'
        ],[
            'judul_agenda'  => 'Judul Agenda',
            'jenis_agenda'  => 'Jenis Agenda',
            'tgl_agenda'    => 'Tanggal Agenda',
            'jam_agenda'    => 'Jam Agenda'
        ]);

        Agenda::create($data);

        return redirect()->back()->withSuccess('Agenda was successfully added');
    }

}
