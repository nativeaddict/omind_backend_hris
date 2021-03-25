<?php

use App\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KaryawanSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(CeoSeeder::class);
        $this->call(AgendaSeeder::class);
        $this->call(PermohonanSeeder::class);
        $this->call(KehadiranSeeder::class);
        $this->call(KaryawanProjectSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(TunjanganSeeder::class);
        $this->call(TglLiburSeeder::class);
        $this->call(TotalGajiSeeder::class);
    }
}
