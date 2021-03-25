<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TglLibur;
use Faker\Generator as Faker;

$factory->define(TglLibur::class, function (Faker $faker) {
    $month = $faker->month;
    $tiga1hari = [1, 3, 5, 7, 8, 10, 12];
    $tiga0hari = [4, 6, 9, 11];
    if (in_array($month,$tiga1hari)) {
        $jml_hari = 31;
    } elseif (in_array($month, $tiga0hari)) {
        $jml_hari = 30;
    } else {
        $jml_hari = $faker->randomElement([28,29]);
    }
    return [
        'tgl'   => $faker->numberBetween(1, $jml_hari),
        'bulan' => $month,
        'deskripsi' => $faker->text
    ];
});
