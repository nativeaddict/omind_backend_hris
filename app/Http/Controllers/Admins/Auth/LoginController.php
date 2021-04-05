<?php

namespace App\Http\Controllers\Admins\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function adminLogin(Request $request) {
        $data = $this->validate($request,[
            'username'  => 'required',
            'password'  => 'required'
        ],[
            'required'  => ':attribute harus diisi'
        ],[
            'username'  => 'Username',
            'password'  => 'Password'
        ]);

        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->intended(route('dashboard'));
        }

        return redirect()->withInput($request->only('username'))->withErrors('Email atau Password Salah');
    }

    public function adminLogout() {
        Auth::guard('admin')->logout();

        return redirect()->to('login');
    }
}
