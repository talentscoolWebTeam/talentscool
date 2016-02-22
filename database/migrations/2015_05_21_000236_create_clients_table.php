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
			$table->String('city');
			$table->String('state');
			$table->Integer('zipcode');
			$table->String('gender');
			$table->String('self_introduction');
			$table->text('phone_number')->nullable();
			$table->date('dob');
			$table->string('personal_photo');
			$table->Integer('status');
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
		Schema::drop('clients');
	}

}
