<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTripsTable extends Migration
{
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->unsignedBigInteger('source_id')->nullable();
            $table->foreign('source_id', 'source_fk_10613224')->references('id')->on('sources');
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->foreign('destination_id', 'destination_fk_10613225')->references('id')->on('destinations');
            $table->unsignedBigInteger('airport_id')->nullable();
        });
    }
}
