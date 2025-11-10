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
          Schema::table('trips', function (Blueprint $table) {
            $table->decimal('ertiga', 15, 2)->nullable()->after('innova_round_trip');
            $table->decimal('ertiga_round_trip', 15, 2)->nullable()->after('ertiga');
        });
    }

    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->dropColumn(['ertiga', 'ertiga_round_trip']);
        });
    }
};
