<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use App\TotalGaji;
use Faker\Generator as Faker;

$factory->define(TotalGaji::class, function (Faker $faker) {
    $idkaryawan = Karyawan::all()->pluck('id')->toArray();
    return [
        'id_karyawan'       => $faker->randomElement($idkaryawan),
        'jumlah_tunjungan'  => $faker->numberBetween(1, 100) * 1000,
        'tgl_gajian'        => $faker->date,
        'gaji_pokok'        => $faker->numberBetween(1, 100) * 10000,
    ];
});
