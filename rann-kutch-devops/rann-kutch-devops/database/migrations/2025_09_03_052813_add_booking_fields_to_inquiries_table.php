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
        Schema::table('inquiries', function (Blueprint $table) {
            $table->date('pickup_date')->nullable()->after('destination_id');
            $table->time('pickup_time')->nullable()->after('pickup_date');
            $table->date('return_date')->nullable()->after('pickup_time');
            $table->time('return_time')->nullable()->after('return_date');
            $table->string('car_type')->nullable()->after('return_time');
            $table->float('total_amount', 15, 2)->nullable()->after('car_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inquiries', function (Blueprint $table) {
            //
        });
    }
};
