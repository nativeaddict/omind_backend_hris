<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use App\KaryawanProject;
use App\Project;
use Faker\Generator as Faker;

$factory->define(KaryawanProject::class, function (Faker $faker) {
    $idproject = Project::all()->pluck('id')->toArray();
    $idkaryawan = Karyawan::all()->pluck('id')->toArray();
    return [
        'id_project'    => $faker->randomElement($idproject),
        'id_karyawan'   => $faker->randomElement($idkaryawan)
    ];
});
