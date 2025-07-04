<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\TaskStatus;
use App\TaskPriority;


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
            'title' => fake()->sentence,
            'description' => fake()->paragraph,
            'status' => fake()->randomElement(TaskStatus::cases()),
            'priority' => fake()->randomElement(TaskPriority::cases()),
            'due_date' => fake()->dateTimeBetween(
                startDate: now(),
                endDate: now()->addDays(30)
            ),
        ];
    }
}
