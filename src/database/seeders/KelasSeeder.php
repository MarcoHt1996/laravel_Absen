<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Kelas::factory()->count(20)->create();
    }
}
