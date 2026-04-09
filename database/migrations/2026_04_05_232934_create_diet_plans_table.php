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
        Schema::create('diet_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description');
            $table->decimal('calorie_multiplier', 5, 2);
            $table->decimal('carbohydrate_percentage', 5, 2);
            $table->decimal('protein_percentage', 5, 2);
            $table->decimal('fat_percentage', 5, 2);
            $table->decimal('fiber_percentage', 5, 2);
            $table->integer('duration_days');
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diet_plans');
    }
};
