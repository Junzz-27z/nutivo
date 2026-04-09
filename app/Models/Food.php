<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /** @use HasFactory<\Database\Factories\FoodFactory> */
    use HasFactory;

    public function foodCategory() {
        return $this->belongsTo(FoodCategory::class);
    }

    public function foodLog() {
        return $this->hasMany(FoodLog::class);
    }
}
