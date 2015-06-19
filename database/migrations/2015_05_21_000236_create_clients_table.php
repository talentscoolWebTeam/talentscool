<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('fname');
			$table->String('lname');
			$table->String('nname');
			$table->text('email');
			$table->String('City');
			$table->String('State');
			$table->Integer('zipcode');
			$table->String('gender');
			$table->text('phone_number')->nullable();
			$table->date('dob');
			$table->Integer('status');
			$table->timestamps();
			
			$table->foreign('location_id')->references('id')->on('locations');
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
