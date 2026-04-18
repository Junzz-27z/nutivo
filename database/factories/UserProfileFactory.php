<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserProfile>
 */
class UserProfileFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'gender' => fake()->randomElement(['male', 'female']),
            'birth_date' => fake()->dateTimeBetween('-20 years', '-14 years')->format('Y-m-d'),
            'height_cm' => fake()->randomFloat(0, 120, 180),
            'weight_kg' => fake()->randomFloat(0, 40, 100),
            'activity_level' => fake()->randomElement(['sedentary', 'light', 'moderate', 'active', 'very_active'])
        ];
    }
}
