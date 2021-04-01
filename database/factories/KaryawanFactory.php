<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use Faker\Generator as Faker;

$factory->define(Karyawan::class, function (Faker $faker) {
    return [
        'nama'          => $faker->name,
        'email'         => $faker->email,
        'password'      => bcrypt('password'),
        'tmp_lahir'     => $faker->city,
        'tgl_lahir'     => $faker->date,
        'jenis_kelamin' => $faker->randomElement(['Man','Woman']),
        'alamat'        => $faker->address,
        'ktp'           => 'https://i.pravatar.cc/300',
        'ijazah'        => 'https://i.pravatar.cc/300',
        'gol_darah'     => $faker->randomElement(['O','A','B','AB']),
        'instagram'     => $faker->userName,
        'hari_kerja'    => $faker->randomDigit,
        'role'          => $faker->randomElement(['Production', 'Marketing']),
        'posisi'        => $faker->randomElement([
            'Fullstack Web Developer',
            'Backend Web Developer',
            'Frontend Web Developer',
            'Fullstack Mobile Developer',
            'Backedn Mobile Developer',
            'Frontend Mobile Developer',
            'UI/UX Designer',
            'Graphic Designer',
            'Marketing'
        ]),
        'gaji_pokok'    => $faker->numberBetween(1, 100) * 100000,
        'no_hp'         => $faker->phoneNumber,
        'foto'          => 'https://i.pravatar.cc/300'
    ];
});
