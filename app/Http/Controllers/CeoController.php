<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CeoController extends Controller
{
    public function login(Request $request) {
        $data = $this->validate($request,[
            'email'     => 'required',
            'password'  => 'required|min:5'
        ],[
            'required'  => ':attribute harus diisi'
        ],[
            'email'     => 'Email',
            'password'  => 'Password'
        ]);

        $token = Auth::guard('ceo')
    }
}
