<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'position' => fake()->jobTitle(),
            'message' => fake()->paragraph(),
            'photo' => 'https://via.placeholder.com/100', // placeholder image
        ];
    }
}
