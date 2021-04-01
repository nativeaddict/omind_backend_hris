<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Karyawan;
use Illuminate\Http\Request;

class AdminKaryawanController extends Controller
{
    public function teamMember() {
        $data = Karyawan::all();

        return view('teammembers_view', compact('data'));
    }

    public function createEmployee(Request $request) {
        // dd($request->all());
        $data = $this->validate($request, [
            'nama'          => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'tmp_lahir'     => 'required',
            'tgl_lahir'     => 'required',
            'jenis_kelamin' => 'required',
            'alamat'        => 'required',
            'ktp'           => 'required|mimes:pdf',
            'ijazah'        => 'required|mimes:pdf',
            'gol_darah'     => '',
            'instagram'     => 'required',
            'hari_kerja'    => 'required',
            'posisi'        => 'required',
            'role'          => 'required',
            'gaji_pokok'    => 'required',
            'no_hp'         => 'required',
            'foto'          => 'mimes:jpg,png'
        ],[
            'required'      => ':attribute harus diisi',
            'mimes'         => ':attribute harus berformat pdf'
        ],[
            'nama'          => 'Nama',
            'email'         => 'Email',
            'password'      => 'Password',
            'tmp_lahir'     => 'Tempat Lahir',
            'tgl_lahir'     => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat'        => 'Alamat',
            'ktp'           => 'KTP',
            'ijazah'        => 'Ijazah',
            'gol_darah'     => 'Golongan Darah',
            'instagram'     => 'Instagram',
            'hari_kerja'    => 'Hari Kerja',
            'posisi'        => 'Posisi',
            'role'          => 'Role',
            'gaji_pokok'    => 'Gaji Pokok',
            'no_hp'         => 'No HP',
            'foto'          => 'Foto'
        ]);

        $data['password'] = bcrypt($data['password']);
        $data['ktp'] = upload($data['ktp'], 'ktp');
        $data['ijazah'] = upload($data['ijazah'],'ijazah');
        $data['foto'] = upload($data['foto'], 'foto');

        Karyawan::create($data);

        return redirect()->to('/team-members')->withSuccess('Success Add Employees');

    }
}
