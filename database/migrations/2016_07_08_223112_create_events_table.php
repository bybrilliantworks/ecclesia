<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for events types
        Schema::create('event_types', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

        });

        // Create table for events
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_type_id')->unsigned();
            $table->string('theme');
            $table->text('description');
            $table->dateTime('event_date');
            $table->string('venue');
            $table->string('ministering');
            $table->double('total_tithe_received');
            $table->double('total_offering_received');
            $table->timestamps();
            $table->softDeletes();
        });


        // Creates the table to capture the event attendances
        Schema::create('event_attendances', function(Blueprint $table){

            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->integer('event_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events_types');

        Schema::drop('events');

        Schema::drop('event_attendances');
    }
}
