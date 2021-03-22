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
        'jenis_kelamin' => $faker->randomElement(['Laki-Laki','Perempuan']),
        'alamat'        => $faker->address,
        'ktp'           => 'https://i.pravatar.cc/300',
        'ijazah'        => 'https://i.pravatar.cc/300',
        'gol_darah'     => $faker->randomElement(['O','A','B','AB']),
        'instagram'     => $faker->userName,
        'hari_kerja'    => $faker->dayOfWeek,
        'posisi'        => $faker->randomElement(['UI/UX Designer', 'Fullstack Developer', 'Backend Developer','Frontend Developer']),
        'role'          => $faker->randomElement(['Production', 'Marketing', 'Project Manager']),
        'gaji_pokok'    => $faker->randomDigitNotNull,
        'no_hp'         => $faker->phoneNumber,
        'foto'          => 'https://i.pravatar.cc/300'
    ];  
});
