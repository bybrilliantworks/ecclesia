<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create churches table
        Schema::create('churches', function(Blueprint $table){

            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('founder');
            $table->string('email');
            $table->string('password');
            $table->string('phone_number');
            $table->string('website');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->text('address');
            $table->timestamps();
        });

        Schema::table('members', function(Blueprint $table){
            $table->integer('church_id')->unsigned()->after('id');
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
        // Drop Churches table
        Schema::drop('churches');
    }
}
