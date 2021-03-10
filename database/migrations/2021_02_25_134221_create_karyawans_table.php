<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->text('password');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->string('alamat');
            $table->text('ktp');
            $table->text('ijazah');
            $table->char('gol_darah');
            $table->text('sosmed');
            $table->text('hari_kerja');
            $table->string('posisi');
            $table->string('role');
            $table->integer('gaji_pokok');
            $table->string('no_hp');
            $table->text('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}
