<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

#Karyawan
Route::post('/login', 'KaryawanController@login');
Route::middleware('auth:karyawan')->group(function(){
    Route::post('/ubah-pwd', 'KaryawanController@ubahPassword');
    Route::get('/our-team','KaryawanController@ourTeam');
    Route::get('/view-profile','KaryawanController@viewProfile');
    #Berita
    Route::get('/news','BeritaController@viewNews');
    #Project
    Route::get('/view-project','ProjectController@selectProject');
    #Tunjangan
    Route::get('/view-tunjangan', 'TunjanganController@viewTunjangan');
});

#Permohonan
Route::post('/upload-surat','PermohonanController@uploadFile');

#Presensi
Route::post('/tap-in', 'KehadiranController@tapIn');
Route::post('/tap-out', 'KehadiranController@tapOut');
