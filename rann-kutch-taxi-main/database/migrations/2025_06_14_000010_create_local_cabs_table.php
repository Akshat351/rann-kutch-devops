<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateLocalCabsTable extends Migration
{
    public function up()
    {
        Schema::create('local_cabs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
             $table->string('slug')->unique();
            $table->string('mini_eight_hr_eighty_km', 10, 2)->nullable();
            $table->string('mini_ten_hr_hundred_km', 10, 2)->nullable();
            $table->string('mini_twelve_hr_hundred_twenty_km', 10, 2)->nullable();

            $table->string('sedan_eight_hr_eighty_km', 10, 2)->nullable();
            $table->string('sedan_ten_hr_hundred_km', 10, 2)->nullable();
            $table->string('sedan_twelve_hr_hundred_twenty_km', 10, 2)->nullable();


            $table->string('suv_eight_hr_eighty_km', 10, 2)->nullable();
            $table->string('suv_ten_hr_hundred_km', 10, 2)->nullable();
            $table->string('suv_twelve_hr_hundred_twenty_km', 10, 2)->nullable();


            $table->string('ertiga_eight_hr_eighty_km', 10, 2)->nullable();
            $table->string('ertiga_ten_hr_hundred_km', 10, 2)->nullable();
            $table->string('ertiga_twelve_hr_hundred_twenty_km', 10, 2)->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->longText('sort_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();

        });
    }
     public function down()
    {
        Schema::dropIfExists('local_cabs');
    }
}
