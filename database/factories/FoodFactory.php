<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\FoodCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'food_category_id'     => FoodCategory::factory(),
            'name'                 => fake()->words(2, true),
            'serving_description'  => fake()->randomElement(['1 piring', '1 buah', '1 mangkok', '1 potong']),
            'serving_size_g'       => fake()->randomFloat(0, 50, 250),
            'calorie_per_100g'     => fake()->randomFloat(0, 0, 300),
            'carbohydrate_per_100g'=> fake()->randomFloat(0, 0, 150),
            'protein_per_100g'     => fake()->randomFloat(0, 0, 100),
            'fat_per_100g'         => fake()->randomFloat(0, 0, 100),
            'fiber_per_100g'       => fake()->randomFloat(0, 0, 50),
            'is_active'            => true,
        ];
    }
}
