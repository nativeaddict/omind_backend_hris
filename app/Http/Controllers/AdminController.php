<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createKaryawan(Request $request) {
        $data = $this->validate($request,[
            'nama'              => 'required',
            'email'             => 'required',
            'password'          => 'required|min:5',
            'tmp_lahir'         => 'required',
            'tgl_lahir'         => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'ktp'               => 'required|mimes:pdf,jpg,png,jpeg',
            'ijazah'            => 'required|mimes:pdf,jpg,png,jpeg',
            'gol_darah',
            'sosmed'            => 'required',
            'hari_kerja'        => 'required',
            'posisi'            => 'required',
            'role'              => 'required',
            'gaji_pokok'        => 'required',
            'no_hp'             => 'required'
        ],[
            'required'          => ':data harus diisi',
            'mimes'             => ':file yang diupload harus berformat png, jpg, jpeg, dan pdf'
        ],[
            'nama'              => 'Nama',
            'email'             => 'Email',
            'password'          => 'Password',
            'tmp_lahir'         => 'Tempat Lahir',
            'tgl_lahir'         => 'Tanggal Lahir',
            'jenis_kelamin'     => 'Jenis Kelamin',
            'alamat'            => 'Alamat',
            'ktp'               => 'KTP',
            'ijazah'            => 'Ijazah',
            'gol_darah'         => 'Golongan Darah',
            'sosmed'            => 'Sosial Media',
            'hari_kerja'        => 'Hari Kerja',
            'posisi'            => 'Posisi',
            'role'              => 'Role Divisi',
            'gaji_pokok'        => 'Gaji Pokok',
            'no_hp'             => 'Nomor Hp'
        ]);

        $data['ktp'] = upload($data['ktp'], 'ktp');
        $data['ijazah'] = upload($data['ijazah'], 'ijazah');
        Admin::create($data);
        return $data;
    }
}
