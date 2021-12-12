<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ZaposleniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'br_telefona' => $this->faker->e164PhoneNumber(),
            'poslovnica_id' => $this->faker->numberBetween($min = 1, $max = 20)
        ];
    }
}
