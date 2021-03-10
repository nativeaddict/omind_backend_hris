<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agenda;
use Faker\Generator as Faker;

$factory->define(Agenda::class, function (Faker $faker) {
    return [
        'jenis_agenda'  => $faker->word,
        'tgl_agenda'    => $faker->date,
        'jam_agenda'    => $faker->time,
    ];
});
