<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'nama'      => $faker->name,
        'email'     => $faker->email,
        'username'  => $faker->userName,
        'password'  => bcrypt('password'),
        'alamat'    => $faker->address,
        'tgl_lahir' => $faker->date,
        'posisi'    => $faker->randomElement(['HRD','Project Manager']),
        'no_hp'     => $faker->phoneNumber,
        'foto'      => 'https://i.pravatar.cc/300'
    ];
});
