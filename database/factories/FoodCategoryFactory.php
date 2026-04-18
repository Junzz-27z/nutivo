<?php

namespace Database\Factories;

use App\Models\FoodCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FoodCategory>
 */
class FoodCategoryFactory extends Factory
{
    public static array $categories = [
        'Karbohidrat', 'Protein', 'Lemak', 'Serat'
    ];
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(self::$categories)
        ];
    }
}
