<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Berita;
use Faker\Generator as Faker;

$factory->define(Berita::class, function (Faker $faker) {
    $date = now()->format('Y-m-d');
    return [
        'ava_berita'    => 'https://i.pravatar.cc/300',
        'judul_berita'  => $faker->jobTitle,
        'isi_berita'    => $faker->text,
        'tgl_post'      => $date
    ];
});
