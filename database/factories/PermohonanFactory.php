<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use App\Permohonan;
use Faker\Generator as Faker;

$factory->define(Permohonan::class, function (Faker $faker) {
    $idkaryawan = Karyawan::all()->pluck('id')->toArray();
    return [
        'id_karyawan'   => $faker->randomElement($idkaryawan),
        'file'          => $faker->text,
        'created_add'   => $faker->dateTime,
        'jenis'         => $faker->randomElement(['Izin','Cuti','Sakit']),
    ];
});
