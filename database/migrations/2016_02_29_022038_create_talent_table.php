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
			$table->timestamps();
			$table->string('industry');
			$table->string('specific_talent');
			//portfolio item
			$table->string('type1',20)->nullable();
			$table->string('portfolioitem1', 400)->nullable();
			$table->string('type2',20)->nullable();
			$table->string('portfolioitem2', 400)->nullable();
			$table->string('type3',20)->nullable();
			$table->string('portfolioitem3', 400)->nullable();
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
