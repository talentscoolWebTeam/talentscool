<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email')->unique();
            $table->timestamps();
            $table->string('country',50);
            $table->string('state',50);
            $table->string('city',50);
            $table->string('zip',10);
            $table->string('phone',20);
            $table->date('dob');
            $table->string('gender',30);
            $table->string('profilepic', 255);

            $table->string('talent_category',100);
            $table->string('specific_talent',100);
            $table->string('audiopath', 255)->nullable();
            $table->string('imagepath', 255)->nullable();
            $table->string('vidlink', 255)->nullable();

            $table->text('aboutme');
            $table->string('socialmedia',100)->nullable();
            //$table->string('extralink1',100)->nullable();
            //$table->string('extralink2',100)->nullable();
            //$table->string('extralink3',100)->nullable();
            $table->string('experience', 255);
            $table->string('currRepresent', 100)->nullable();

            $table->string('opportunities', 100)->nullable();
            $table->string('representation', 100)->nullable();
            $table->string('generalserv', 100)->nullable();
            $table->string('talentdev', 100)->nullable();
            $table->string('vanitylux', 100)->nullable();
            $table->string('additional', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
