<?php

namespace App\Http\Controllers;

use App\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function uploadFile(Request $request) {
        $data = $this->validate($request, [
            'id_karyawan'   => 'required',
            'file'          => 'required|mimes:pdf,jpg,jpeg,png',
            'created_add'   => 'required',
            'jenis'         => 'required'
        ],[
            'mimes'         => ':attribute harus berformat pdf, jpg, jpeg atau png',
            'required'      => ':attribute harus diisi'
        ],[
            'id_karyawan'   => 'Id Karyawan',
            'file'          => 'File Permohonan',
            'created_add'   => 'Kapan Dibuat',
            'jenis'         => 'Jenis Permohonan'
        ]);

        $data['file'] = upload($data['file'], 'permohonan');
        Permohonan::create($data);
        return response()->json([
            'status'    => 200,
            'message'   => 'Surat Berhasil di Upload',
            'data'      => $data
        ]);
    }
}
