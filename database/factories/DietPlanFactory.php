<?php

namespace Database\Factories;

use App\Models\DietPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DietPlan>
 */
class DietPlanFactory extends Factory
{
    public static array $dietPlans = [
        [
                'name'                    => 'Diet Ringan',
                'description'             => 'Program diet ringan untuk menurunkan berat badan secara perlahan dan aman.',
                'calorie_multiplier'      => 0.90,
                'carbohydrate_percentage' => 50.00,
                'protein_percentage'      => 25.00,
                'fat_percentage'          => 20.00,
                'fiber_percentage'        => 5.00,
                'duration_days'           => 30,
                'is_active'               => true,
            ],
            [
                'name'                    => 'Diet Standar',
                'description'             => 'Program diet standar dengan pengurangan kalori yang seimbang.',
                'calorie_multiplier'      => 0.85,
                'carbohydrate_percentage' => 45.00,
                'protein_percentage'      => 30.00,
                'fat_percentage'          => 15.00,
                'fiber_percentage'        => 10.00,
                'duration_days'           => 60,
                'is_active'               => true,
            ],
            [
                'name'                    => 'Diet Ketat',
                'description'             => 'Program diet ketat untuk penurunan berat badan yang signifikan dalam waktu singkat.',
                'calorie_multiplier'      => 0.75,
                'carbohydrate_percentage' => 35.00,
                'protein_percentage'      => 40.00,
                'fat_percentage'          => 15.00,
                'fiber_percentage'        => 10.00,
                'duration_days'           => 90,
                'is_active'               => true,
            ],
    ];
    public function definition(): array
    {
        return $this->faker->randomElement(self::$dietPlans);
    }
}
