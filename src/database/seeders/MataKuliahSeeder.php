<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MataKuliah::factory()->count(20)->create();
    }
}
