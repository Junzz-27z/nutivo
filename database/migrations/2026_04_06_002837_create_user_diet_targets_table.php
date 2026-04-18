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
        Schema::create('user_diet_targets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('diet_plan_id')->constrained();
            $table->decimal('calorie_target', 6, 2);
            $table->decimal('carbohydrate_target_g', 6, 2);
            $table->decimal('protein_target_g', 6, 2);
            $table->decimal('fat_target_g', 6, 2);
            $table->decimal('fiber_target_g', 6, 2);
            $table->date('started_at');
            $table->boolean('is_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_diet_targets');
    }
};
