<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('food_id')->constrained();
            $table->date('log_date');
            $table->decimal('quantity_g', 8, 2);
            $table->decimal('calorie_g', 8, 2);
            $table->decimal('carbohydrate_g', 8, 2);
            $table->decimal('protein_g', 8, 2);
            $table->decimal('fat_g', 8, 2);
            $table->decimal('fiber_g', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_logs');
    }
};
