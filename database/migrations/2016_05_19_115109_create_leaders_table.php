<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create leaders table
        Schema::create('leaders', function(Blueprint $table){

            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->date('appointed_on');
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
        // Drop leaders table
        Schema::drop('leaders');
    }
}
