<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDietTarget extends Model
{
    /** @use HasFactory<\Database\Factories\UserDietTargetFactory> */
    use HasFactory;

    public function dietPlan() {
        return $this->belongsTo(DietPlan::class, 'diet_plan_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
