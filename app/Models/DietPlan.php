<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietPlan extends Model
{
    /** @use HasFactory<\Database\Factories\DietPlanFactory> */
    use HasFactory;

    public function userTarget() {
        return $this->hasMany(UserDietTarget::class);
    }
}
