<?php

use App\TglLibur;
use Illuminate\Database\Seeder;

class TglLiburSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TglLibur::class, 25)->create();
    }
}
