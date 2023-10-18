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
            'name'=>fake()->name(),
            'description'=>fake()->text()

        ];
    }

    public function completed(): Factory
    {
    return $this->state(function (array $attributes) {
        return [
            'status' => true,
        ];
    });
    }

    public function uncompleted(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => false,
            ];
        });
    }

    public function tomorrow(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'due_date' => now()->addDay(),
            ];
        });
    }


    public function priority($level = 1 ): Factory
    {
        return $this->state(
            fn (array $attributes) => [
                'priority'=>$level,
            ]
        );
    }








}
