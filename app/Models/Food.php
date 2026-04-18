<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /** @use HasFactory<\Database\Factories\FoodFactory> */
    use HasFactory;

    protected $fillable = [
        'food_category_id',
        'name',
        'serving_description',
        'serving_size_g',
        'calorie_per_100g',
        'carbohydrate_per_100g',
        'protein_per_100g',
        'fat_per_100g',
        'fiber_per_100g',
    ];

    public function foodCategory() {
        return $this->belongsTo(FoodCategory::class, 'food_category_id');
    }

    public function foodLog() {
        return $this->hasMany(FoodLog::class);
    }
}
