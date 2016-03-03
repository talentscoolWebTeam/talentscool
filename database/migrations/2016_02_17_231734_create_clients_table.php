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

            $table->text('aboutme');
            $table->string('twitter',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('youtube',255)->nullable();
            $table->text('extralinks')->nullable();

            $table->text('experience', 255);
            $table->text('awards', 255);
            $table->string('currRepresent', 100)->nullable();

            $table->text('opportunities', 100)->nullable();
            $table->text('representation', 100)->nullable();
            $table->text('generalserv', 100)->nullable();
            $table->text('talentdev', 100)->nullable();
            $table->text('vanitylusx', 100)->nullable();
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
