<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Berita;
use Faker\Generator as Faker;

$factory->define(Berita::class, function (Faker $faker) {
    return [
        'isi_berita'    => $faker->text,
        'ava_berita'    => 'https://i.pravatar.cc/300'
    ];
});
