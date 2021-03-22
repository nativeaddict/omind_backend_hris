<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use App\Kehadiran;
use Faker\Generator as Faker;

$factory->define(Kehadiran::class, function (Faker $faker) {
    $idkaryawan = Karyawan::all()->pluck('id')->toArray();
    $date = $faker->date();
    return [
        'id_karyawan'   => $faker->randomElement($idkaryawan),
        'tap_in'        => $date.' '.$faker->time(),
        'tap_out'       => $date.' '.$faker->time(),
        'feel'          => $faker->randomElement(['happy','chill','tired','confused'])
    ];
});
