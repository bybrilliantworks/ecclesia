<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
//        Schema::table('users', function(Blueprint $table){
//            $table->string('first_name')->after('id');
//            $table->string('last_name')->after('first_name');
//        });


        Schema::table('members', function(Blueprint $table){
            $table->string('occupation')->after('marital_status');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
