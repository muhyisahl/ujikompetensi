<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\perjalanan>
 */
class PerjalananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id_user"=>12,
            "tanggal"=>$this->faker->date(),
            "jam"=>$this->faker->time(),
            "lokasi"=>$this->faker->address(),
            "suhu"=>$this->faker->numberBetween(32,36)
        ];
    }
}
