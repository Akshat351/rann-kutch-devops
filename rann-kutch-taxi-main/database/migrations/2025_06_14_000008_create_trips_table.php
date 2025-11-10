<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('trip_type');
            $table->decimal('mini', 15, 2)->nullable();
            $table->decimal('mini_round_trip', 15, 2)->nullable();
            $table->decimal('sedan', 15, 2)->nullable();
            $table->decimal('sedan_round_trip', 15, 2)->nullable();
            $table->decimal('suv', 15, 2)->nullable();
            $table->decimal('suv_round_trip', 15, 2)->nullable();
            $table->decimal('innova', 15, 2)->nullable();
            $table->decimal('innova_round_trip', 15, 2)->nullable();
            $table->longText('sort_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
