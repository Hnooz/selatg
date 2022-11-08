<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' => $this->faker->name,
                'price' => $this->faker->numberBetween($min = 1000, $max = 9000),
                'size' => Str::random(3),
        ];
    }
}
