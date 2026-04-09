<?php

namespace Database\Seeders;

use App\Models\DietPlan;
use Database\Factories\DietPlanFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DietPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (DietPlanFactory::$dietPlans as $dietPlan) {
            DietPlan::firstOrCreate(['name' => $dietPlan['name']], $dietPlan);
        }
    }
}
