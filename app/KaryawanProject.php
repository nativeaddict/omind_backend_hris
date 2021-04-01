<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryawanProject extends Model
{
    protected $guarded = ['id'];

    public function project() {
        return $this->belongsTo(Project::class,'id_project');
    }

    public function karyawan() {
        return $this->belongsTo(Karyawan::class,'id_karyawan');
    }
}
