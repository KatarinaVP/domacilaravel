<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kompanija;

class PoslovnicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'grad' => $this->faker->city(),
            'adresa' => $this->faker->streetAddress(),
            'kompanija_id' => Kompanija::factory()
        ];
    }
}
