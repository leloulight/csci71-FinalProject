<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_models', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title')->default('');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('url');
            $table->string('allDay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_models');
    }
}
