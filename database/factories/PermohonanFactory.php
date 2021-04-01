<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use App\Permohonan;
use Faker\Generator as Faker;

$factory->define(Permohonan::class, function (Faker $faker) {
    $idkaryawan = Karyawan::all()->pluck('id')->toArray();
    return [
        'id_karyawan'   => $faker->randomElement($idkaryawan),
        'jenis'         => $faker->randomElement(['Cuti Kontrak','Nikah','Melahirkan','Duka','Sakit','Musibah']),
        'tgl_mulai'     => $faker->date(),
        'tgl_akhir'     => $faker->date(),
        'deskripsi'     => $faker->text,
        'file'          => 'https://i.pravatar.cc/300',
        'status'        => $faker->randomElement(['pending','rejected','approved']),
    ];
});
