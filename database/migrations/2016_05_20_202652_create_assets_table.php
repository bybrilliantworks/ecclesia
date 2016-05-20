<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create assets table
        Schema::create('assets', function(Blueprint $table){

            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('manufacturer');
            $table->date('purchased_at');
            $table->decimal('amount');
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
        // Drop assets table
        Schema::drop('assets');
    }
}
