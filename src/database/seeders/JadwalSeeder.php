<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jadwal::factory()->count(20)->create();
    }
}
