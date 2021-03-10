<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    public function login(Request $request) {
        $data = $this->validate($request, [
            'email'     => 'required',
            'password'  => 'required|min:5'
        ],[
            'required'  => ':harus diisi'
        ],[
            'email'     => 'Login',
            'password'  => 'Password'
        ]);

        $token = Auth::guard('karyawan')->attempt($data);
        if ($token) {
            $karyawan = Auth::guard('karyawan')->user();
            return response()->json([
                'status'    => 200,
                'message'   => 'Login Berhasil',
                'data'      => $karyawan,
                'token'     => $token
            ]);
        } else {
            return response()->json([
                'status'    => 401,
                'message'   => 'Gagal Login'
            ]);
        }
    }

    public function logout() {
        Auth::guard('karyawan')->logout();
        return response()->json([
            'status'    => 200,
            'message'   => 'Berhasil Logout'
        ]);
    }

    public function ubahPassword(Request $request) {
        $data = $this->validate($request,[
            'password_lama'     => 'required',
            'password_baru'     => 'required',
        ]);
        
        $userLogin = auth('karyawan')->user();

        if (Hash::check($data['password_lama'], $userLogin->password)) {
            $data['password_baru'] = bcrypt($data['password_baru']);
            $userLogin->update(['password' => $data['password_baru']]);
            return response()->json([
                'status'    => 200,
                'message'   => 'Ganti Password Berhasil',
            ]);
        } else {
            return response()->json([
                'status'    => 422,
                'message'   => 'Password Lama Salah'
            ]);
        }
        
    }

    
}
