<?php

use App\KaryawanProject;
use Illuminate\Database\Seeder;

class KaryawanProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(KaryawanProject::class, 5)->create();
    }
}
