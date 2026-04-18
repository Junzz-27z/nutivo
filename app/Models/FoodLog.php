<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodLog extends Model
{
    /** @use HasFactory<\Database\Factories\FoodLogFactory> */
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function food() {
        return $this->belongsTo(Food::class);
    }
}
