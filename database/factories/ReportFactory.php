<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'state' => $this->faker->state,
            'region' => $this->faker->streetName,
            'section' => $this->faker->streetAddress,
            'body' => $this->faker->text,
        ];
    }
}
