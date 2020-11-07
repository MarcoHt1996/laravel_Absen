<?php

namespace Database\Factories;

use App\Models\Absensi;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsensiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Absensi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id"=>$this->faker->numerify("###"),
            "jadwal"=>$this->faker->numerify("##"),
            "nim"=>$this->faker->numerify("########"),
            "tanggal"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "status"=>$this->faker->randomElement($array = array ('h','a','i','s'))
        ];
    }
}
