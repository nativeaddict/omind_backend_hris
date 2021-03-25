<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total_gajis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_karyawan');
            $table->integer('jumlah_tunjungan');
            $table->date('tgl_gajian');
            $table->integer('gaji_pokok');
            $table->timestamps();
        });

        Schema::table('total_gajis', function (Blueprint $table) {
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
        Schema::dropIfExists('total_gajis');
    }
}
