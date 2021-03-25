<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TglLiburController extends Controller
{
    public function setTgl() {
        $userLogin = auth('karyawan')->user();
        $jum_hari = DB::row('SELECT');
        $hari_kerja = $jum_hari - $libur;


    }
}
