<?php

namespace Database\Seeders;

use App\Models\FoodCategory;
use Database\Factories\FoodCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (FoodCategoryFactory::$categories as $category) {
            FoodCategory::firstOrCreate(['name' => $category]);
        }
    }
}
