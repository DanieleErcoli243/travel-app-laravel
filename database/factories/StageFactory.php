<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stage>
 */
class StageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>fake()->words(2, true),
            'description'=>fake()->text(200),
            'date'=>fake()->date(),
            'image'=>fake()->imageUrl(),
            'food'=>fake()->word(),
            'interests'=>fake()->words(2, true),
        ];
    }
}
