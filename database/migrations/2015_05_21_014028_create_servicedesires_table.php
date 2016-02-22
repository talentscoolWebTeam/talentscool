<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicedesiresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicedesires', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->foreign('client_id')->references('id')->on('clients');
			$table->text('representation');
			$table->text('opportunity');
			$table->text('service');
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
		Schema::drop('servicedesires');
	}

}
