<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'nama_project'      => $faker->catchPhrase,
        'jenis_project'     => $faker->randomElement(['Mobile Apps', 'Website']),
        'lama_pengerjaan'   => $faker->date('Y-m-d'),
    ];
});
