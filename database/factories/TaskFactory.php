<?php

namespace Database\Factories;

use App\Models\User;
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
        $user = User::all()->random();
        // Poderia fazer um where e trazer somente usuários que possui uma categoria cadastrada.
        while (count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            'title' => fake()->text(30),
            'is_done' => fake()->boolean(),
            'description' => fake()->text(60),
            'due_date' => fake()->dateTime(),
            'user_id' => $user,
            'category_id' => $user->categories->random(),
        ];
    }
}
