<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add columns to groups
        Schema::table('groups', function(Blueprint $table){
            $table->integer('church_id')->unsigned();
            $table->integer('hod')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop group table
        Schema::drop('groups');
    }
}
