<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Karyawan;
use App\KaryawanProject;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminKaryawanProjectController extends Controller
{
    public function listProjectKaryawan() {
        $data = KaryawanProject::with('karyawan','project')->get();

        return view('employeeproject_view',compact('data'));
    }

    public function formProjectKaryawan() {
        $emp = Karyawan::all();
        $job = Project::all();

        return view('inputkaryawanproject_view',compact('emp','job'));
    }

    public function createProjectKaryawan(Request $request){
        $data = $this->validate($request,[
            'id_karyawan'   => 'required',
            'id_project'    => 'required'
        ],[
            'required'  => ':attribute harus diisi'
        ],[
            'id_karyawan'   => 'Employee Name',
            'id_project'    => 'Project Name'
        ]);
        KaryawanProject::create($data);
        return redirect()->to('/add-project-employee')->withSuccess('Success Add Employees');
    }
}
