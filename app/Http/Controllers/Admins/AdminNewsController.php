<?php

namespace App\Http\Controllers\Admins;

use App\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function viewNews() {
        $data = Berita::orderBy('tgl_post','desc')->get();

        return view('news_view',compact('data'));
    }

    public function createNews() {
        return view('addnews_view');
    }

    public function addNews(Request $request) {
        $data = $this->validate($request,[
            'ava_berita'    => 'required|mimes:png,jpg,jpeg',
            'judul_berita'  => 'required',
            'isi_berita'    => 'required',
            'tgl_post'      => ''
        ],[
            'required'  => ':attribute harus diisi',
            'mimes'     => ':attribute harus berformatkan png, jpg atau jpeg'
        ],[
            'ava_berita'    => 'Ava Berita',
            'judul_berita'  => 'Judul Berita',
            'isi_berita'    => 'Isi Berita',
            'tgl_post'      => 'Tanggal Posting'
        ]);

        $data['ava_berita'] = '/'.upload($data['ava_berita'],'ava');
        $data['tgl_post'] = now()->format('Y-m-d');
        Berita::create($data);
        return redirect()->to('/blog/news');
    }
}
