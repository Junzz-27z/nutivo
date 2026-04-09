<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\FoodLog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FoodLog>
 */
class FoodLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'food_id' => Food::all()->random()->id,
            'log_date' => fake()->dateTimeBetween('-30 days', 'now'),
            'quantity_g' => fake()->randomFloat(0, 20, 100),
            'calorie_g' => fake()->randomFloat(0, 20, 100),
            'carbohydrate_g' => fake()->randomFloat(0, 20, 100),
            'protein_g' => fake()->randomFloat(0, 20, 100),
            'fat_g' => fake()->randomFloat(0, 20, 100),
            'fiber_g' => fake()->randomFloat(0, 20, 100)
        ];
    }
}
