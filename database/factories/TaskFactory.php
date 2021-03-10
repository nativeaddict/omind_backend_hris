<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $idkaryawan = Karyawan::all()->pluck('id')->toArray();
    return [
        'id_karyawan'   => $faker->randomElement($idkaryawan),
        'status'        => $faker->randomElement(['Telat','Awas','Aman'])
    ];
});
