<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\KaryawanProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminKaryawanProjectController extends Controller
{
    public function listProjectKaryawan() {
        $data = KaryawanProject::with('karyawan','project')->get();

        return view('employeeproject_view',compact('data'));
    }
}
