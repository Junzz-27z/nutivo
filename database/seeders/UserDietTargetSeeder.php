<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDietTarget;
use Illuminate\Database\Seeder;

class UserDietTargetSeeder extends Seeder
{
    
    public function run(): void
    {
        User::all()->each(function ($users) {
            UserDietTarget::factory()->create(['user_id' => $users->id]);
        });
    }
}
