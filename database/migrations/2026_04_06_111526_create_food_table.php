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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_category_id')->constrained();
            $table->string('name', 150);
            $table->string('serving_description', 100);
            $table->decimal('serving_size_g', 7, 2);
            $table->decimal('calorie_per_100g', 7, 2);
            $table->decimal('carbohydrate_per_100g', 7, 2);
            $table->decimal('protein_per_100g', 7, 2);
            $table->decimal('fat_per_100g', 7, 2);
            $table->decimal('fiber_per_100g', 7, 2);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
