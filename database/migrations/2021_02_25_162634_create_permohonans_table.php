<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_karyawan');
            $table->enum('jenis',['Cuti Kontrak','Nikah','Melahirkan','Duka','Sakit','Musibah']);
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->string('deskripsi');
            $table->text('file');
            $table->enum('status',['Pending','Rejected','Approved'])->default('Pending')->nullable();
            $table->timestamps();
        });

        Schema::table('permohonans', function (Blueprint $table) {
            $table->foreign('id_karyawan')->references('id')->on('karyawans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permohonans');
    }
}
