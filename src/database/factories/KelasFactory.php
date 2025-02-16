<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kelas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id"=>$this->faker->numerify("####"),
            "namakelas"=>$this->faker->name,
            "sesi"=>$this->faker->randomElement($array = array ('pagi','malam')),
            "jurusan"=>$this->faker->randomElement($array = array ('TI','SI'))
        ];
    }
}
