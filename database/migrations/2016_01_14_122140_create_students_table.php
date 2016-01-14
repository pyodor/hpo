<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('zip');
            $table->string('city');
            $table->integer('state_id');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('email');
            $table->integer('year_level');
            $table->integer('section_id');
            $table->timestamps();

            $table->index('id');
            $table->index('first_name');
            $table->index('last_name');
            $table->index('address');
            $table->index('zip');
            $table->index('city');
            $table->index('state_id');
            $table->index('phone_number');
            $table->index('mobile_number');
            $table->index('email');
            $table->index('year_level');
            $table->index('section_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
