<?php

namespace Database\Factories;

use App\Models\DietPlan;
use App\Models\User;
use App\Models\UserDietTarget;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserDietTarget>
 */
class UserDietTargetFactory extends Factory
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
            'diet_plan_id' => DietPlan::inRandomOrder()->first()->id,
            'calorie_target' => fake()->randomFloat(0, 1600, 2500),
            'carbohydrate_target_g' => fake()->randomFloat(0, 50, 200),
            'protein_target_g' => fake()->randomFloat(0, 50, 200),
            'fat_target_g' => fake()->randomFloat(0, 50, 200),
            'fiber_target_g' => fake()->randomFloat(0, 50, 200),
            'started_at' => fake()->dateTimeBetween('-10 years', '-1 years')->format('Y-m-d'),
            'is_active' => true
        ];
    }
}
