<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\FoodLog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'Admin Nutivo',
            'role' => 'admin',
            'email' => 'nutivo@admin.com',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            UserProfileSeeder::class,
            DietPlanSeeder::class,
            UserDietTargetSeeder::class,
        ]);

        FoodCategory::factory()
            ->count(4)
            ->has(Food::factory()->count(4))
            ->create();

        $users = User::where('role', '!=', 'admin')->get();

        $users->each(function ($user) {
            foreach (range(0, 29) as $daysAgo) {
                $date = now()->subDays($daysAgo)->toDateString();

                FoodLog::factory()
                    ->count(rand(3, 5))
                    ->create([
                        'user_id'  => $user->id,
                        'log_date' => $date,
                    ]);
            }
        });
    }
}
