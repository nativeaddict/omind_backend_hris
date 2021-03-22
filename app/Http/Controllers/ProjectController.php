<?php

namespace App\Http\Controllers;

use App\Karyawan;
use App\KaryawanProject;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function viewProject() {
        $project = Project::all();

        return response()->json([
            'status'    => 200,
            'message'   => 'Project Berhasil diTampilkan',
            'data'      => $project
        ]);
    }

    public function selectProject(Request $request) {
        $data = $this->validate($request,[
            'id_project'    => 'required'
        ],[
            'required'      => ':atrribute harus diisi'
        ],[
            'id_project'    => 'Id Project'
        ]);

        $userLogin = auth('karyawan')->id();
        $data['id_karyawan'] = $userLogin;

        KaryawanProject::create($data);

        return response()->json([
            'status'        => 200,
            'message'       => 'Berhasil Memilih Project',
            'data'          => $data
        ]);
    }
}
