<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKehadiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_karyawan');
            $table->dateTime('tap_in');
            $table->dateTime('tap_out')->nullable();
            $table->enum('feel',['happy','chill','tired','confused']);
            $table->timestamps();
        });

        Schema::table('kehadirans', function (Blueprint $table) {
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
        Schema::dropIfExists('kehadirans');
    }
}
