<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jadwal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id"=>$this->faker->numerify("###"),
            "kelas"=>$this->faker->numerify("##"),
            "matakuliah"=>$this->faker->numerify("###"),
            "nidn"=>$this->faker->numerify("########"),
            "noruang"=>$this->faker->numerify("###"),
            "hari"=>$this->faker->randomElement($array = array ('senin','selasa','rabu','kamis','jumat','sabtu')),
            "sesi"=>$this->faker->randomElement($array = array ('I','II'))
        ];
    }
}
