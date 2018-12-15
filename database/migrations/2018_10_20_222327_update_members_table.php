<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('middlename')->after('first_name');
            $table->string('whatsapp_number');
            $table->string('facebook_id')->nullable();
            $table->string('instagram_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('telegram_id')->nullable();
            $table->string('city');
            $table->integer('state_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('lga_id')->unsigned()->nullable();
            $table->foreign('lga_id')->references('id')->on('local_government_areas')->onUpdate('cascade')->onDelete('cascade');
            $table->date('wedding_anniversary')->nullable();
            $table->integer('spouse_id')->unsigned()->nullable();
            $table->foreign('spouse_id')->references('id')->on('members')->onUpdate('cascade')->onDelete('cascade');
            $table->string('next_of_kin')->nullable();
            $table->string('next_of_kin_relationship')->nullable();
            $table->string('next_of_kin_phone_number')->nullable();
            $table->string('next_of_kin_email')->nullable();
            $table->text('next_of_kin_address')->nullable();
            $table->text('next_of_kin_city')->nullable();
            $table->integer('primary_department_id')->unsigned()->nullable();
            $table->integer('secondary_department_id')->unsigned()->nullable();
            $table->foreign('primary_department_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('secondary_department_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete('cascade');
            $table->text('greatest_contribution')->nullable();
            $table->enum('employment_status', ['employed', 'self-employed', 'unemployed', 'NYSC', 'student']);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
            $table->string('organisation')->nullable();
            $table->text('office_address')->nullable();
            $table->text('industry')->nullable();
            $table->string('name_of_institution')->nullable();
            $table->string('location_of_institution')->nullable();
            $table->string('department_in_institution')->nullable();
            $table->string('level_in_institution')->nullable();
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
