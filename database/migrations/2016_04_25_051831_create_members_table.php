<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the members table

        Schema::create('members', function(Blueprint $table){

            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('mobile_number');
            $table->text('address');
            $table->string('gender');
            $table->string('marital_status');
            $table->date('birthday');
            $table->date('date_joined');
            $table->string('certified_code');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop members table
        Schema::drop('members');
    }
}
