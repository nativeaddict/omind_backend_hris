<?php

namespace App\Http\Controllers;

use App\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function uploadFile(Request $request) {
        $data = $this->validate($request, [
            'id_karyawan'   => 'required',
            'jenis'         => 'required',
            'tgl_mulai'     => 'required',
            'tgl_akhir'     => 'required',
            'deskripsi'     => 'required',
            'file'          => 'mimes:jpg,pdf,jpeg,png',
            'status'        => ''
        ],[
            'mimes'         => ':attribute harus berformat pdf, jpg, jpeg atau png',
            'required'      => ':attribute harus diisi'
        ],[
            'id_karyawan'   => 'Id Karyawan',
            'jenis'         => 'Jenis',
            'tgl_mulai'     => 'Tanggal Mulai',
            'tgl_akhir'     => 'Tanggal Akhir',
            'deskripsi'     => 'Deskripsi',
            'file'          => 'File Permohonan',
            'status'        => 'Status'
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
