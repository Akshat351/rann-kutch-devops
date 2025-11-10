<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInquiriesTable extends Migration
{
    public function up()
    {
        Schema::table('inquiries', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_10613446')->references('id')->on('users');
            $table->unsignedBigInteger('source_id')->nullable();
            $table->foreign('source_id', 'source_fk_10613447')->references('id')->on('sources');
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->foreign('destination_id', 'destination_fk_10613448')->references('id')->on('destinations');
        });
    }
}
