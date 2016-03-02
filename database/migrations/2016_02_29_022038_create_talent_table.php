<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talents', function (Blueprint $table) {
			//Will use email to pull talents
			$table->increments('id');
			$table->string('email');
			$table->foreign('email')->references('email')->on('clients');
			$table->timestamps();
			$table->string('industry');
			$table->string('specific_talent');
			//portfolio item
			$table->string('portfolio_item1', 400)->nullable();
			$table->string('portfolio_item2', 400)->nullable();
			$table->string('portfolio_item3', 400)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talents');
	}

}
