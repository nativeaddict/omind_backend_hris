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
            $table->enum('jenis_kelamin',['Man','Woman']);
            $table->string('alamat');
            $table->text('ktp');
            $table->text('ijazah');
            $table->enum('gol_darah',[
                'A',
                'B',
                'O',
                'AB'
            ]);
            $table->text('instagram');
            $table->integer('hari_kerja');
            $table->enum('role',['Production','Marketing']);
            $table->enum('posisi',[
                'Fullstack Web Developer',
                'Backend Web Developer',
                'Frontend Web Developer',
                'Fullstack Mobile Developer',
                'Backedn Mobile Developer',
                'Frontend Mobile Developer',
                'UI/UX Designer',
                'Graphic Designer',
                'Marketing']);
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
