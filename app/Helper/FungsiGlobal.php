<?php

function upload($file, $path, $oldpath = null) {
    if($oldpath){
        unlink($oldpath);   //untuk menghapus foto lama atau file lama
    }
    // $file_name = pathinfo($data['foto']->getClientOriginalName(), PATHINFO_FILENAME).'.'.$data['foto']->getClientOriginalExtension(); //untuk upload file getClientOriginalName = get nama file untuk getClientOriginalExtension = get Extension dari file
    // $data['foto']->move('upload', $file_name); // proses upload file
    // $data['foto'] = 'upload/'.$file_name;   //untuk membuat path file
    $file_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).'.'.$file->getClientOriginalExtension(); //untuk upload file getClientOriginalName = get nama file untuk getClientOriginalExtension = get Extension dari file
    $file->move($path, $file_name);
    $file = $path.'/'.$file_name;
    return $file;
}
