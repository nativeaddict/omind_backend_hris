<?php

use App\Ceo;
use Illuminate\Database\Seeder;

class CeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ceo::class, 1)->create();
    }
}
