<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('talent_id')->unsigned();
			$table->foreign('talent_id')->references('id')->on('talents');
			$table->text('photo');
			$table->text('video');
			$table->text('audio');
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
		Schema::drop('portfolios');
	}

}
