<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use App\Tunjangan;
use Faker\Generator as Faker;

$factory->define(Tunjangan::class, function (Faker $faker) {
    $idkaryawan = Karyawan::all()->pluck('id')->toArray();
    return [
        'id_karyawan'       => $faker->randomElement($idkaryawan),
        'jenis_tunjangan'   => $faker->randomElement(['lembur','makan','kesehatan','transportasi','thr']),
        'jumlah_tunjangan'  => $faker->randomNumber
    ];
});
