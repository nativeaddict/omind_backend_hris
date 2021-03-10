<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ceo;
use Faker\Generator as Faker;

$factory->define(Ceo::class, function (Faker $faker) {
    return [
        'nama'      => $faker->name,
        'email'     => $faker->email,
        'password'  => bcrypt('password'),
        'alamat'    => $faker->address,
        'tgl_lahir' => $faker->date,
        'sosmed'    => $faker->userName,
        'no_hp'     => $faker->phoneNumber
    ];
});
