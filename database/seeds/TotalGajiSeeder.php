<?php

use App\TotalGaji;
use Illuminate\Database\Seeder;

class TotalGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TotalGaji::class, 7)->create();
    }
}
