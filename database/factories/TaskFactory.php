<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {

        $user = User::all()->random();
        
        while(count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            'is_done' => $this->faker->boolean(),
            'title' =>fake()->text(30),
            'description' =>fake()->text(60),
            'due_date' =>fake()->dateTime(),
            'user_id' => $user,
            'category_id' => $user->categories->random(),
        ];
    }
}
