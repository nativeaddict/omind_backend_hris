<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class KaryawanProjectController extends Controller
{
    public function projectEmployee(Request $request) {
        $data = $this->validate($request,[
            'id_karyawan'       => 'required',
            'id_project'        => 'required'
        ],[
            'required'          => ':attribute harus diisi'
        ],[
            'id_karyawan'       => 'Id Karyawan',
            'id_project'        => 'Id Project'
        ]);

        Admin::create($data);

        return response()->json([
            'status'    => 200,
            'message'   => 'Berhasil Menambahkan Project',
            'data'      => $data
        ]);
        
    }
}
