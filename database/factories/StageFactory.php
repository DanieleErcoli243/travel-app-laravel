<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\Day;

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
        $day_ids = Day::pluck('id')->toArray();
        $day_ids[]= null;
        return [
            'title' => fake()->
            'description' => fake()->
            'date' => fake()->
            'image' => fake()->
            'food' => fake()->
            'interests' => fake()->
        ];
    }
}
