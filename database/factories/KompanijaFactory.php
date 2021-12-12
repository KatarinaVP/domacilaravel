<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KompanijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'maticni_broj' => $this->faker->randomNumber($nbDigits = 8, $strict = false),
        ];
    }
}
