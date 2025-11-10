<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesTable extends Migration
{
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('subject')->nullable();
            $table->longText('description')->nullable();
            $table->string('page_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
