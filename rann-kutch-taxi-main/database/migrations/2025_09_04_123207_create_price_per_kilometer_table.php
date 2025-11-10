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
        Schema::create('price_per_kilometer', function (Blueprint $table) {
            $table->id();
            $table->decimal('mini_price_per_km', 15, 2)->nullable();
            $table->decimal('sedan_price_per_km', 15, 2)->nullable();
            $table->decimal('suv_price_per_km', 15, 2)->nullable();
            $table->decimal('innova_price_per_km', 15, 2)->nullable();
            $table->integer('min_km_per_day')->nullable();
            $table->integer('driver_allowance_per_day')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_per_kilometer');
    }
};
