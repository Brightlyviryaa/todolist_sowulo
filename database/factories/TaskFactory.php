<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->sentence(3),
            'description' => fake()->sentence(10),
            'due date'=> fake()->dateTimeBetween('now', '+3 months'),
            'User ID'=> 1
        ];

        
    }
}
