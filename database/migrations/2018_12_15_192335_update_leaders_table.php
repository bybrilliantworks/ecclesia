<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('leaders', function (Blueprint $table) {
            $table->date('appointment_ends')->after('appointed_on');
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
        Schema::table('leaders', function (Blueprint $table) {
            $table->dropColumn('appointment_ends');
        });
    }
}
