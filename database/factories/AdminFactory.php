<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'nama'      => $faker->randomElement(['Wawan Hendrawan','Putri Amalia']),
        'email'     => $faker->randomElement(['wawan@gmail.com','putri@gmail.com']),
        'username'  => $faker->randomElement(['admin_hrd','admin_pm']),
        'password'  => bcrypt('admin'),
        'alamat'    => $faker->randomElement(['Jl. Sukaluyu No.302','Perumahan Bukit Moko']),
        'tgl_lahir' => $faker->randomElement(['1998-02-21','1997-03-27']),
        'posisi'    => $faker->randomElement(['HRD','Project Manager']),
        'no_hp'     => $faker->randomElement(['082290098788','081324567879']),
        'foto'      => 'https://i.pravatar.cc/300'
    ];
});
