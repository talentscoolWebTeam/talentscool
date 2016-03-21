<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('name')->unique();
			$table->timestamps();
		});
		Schema::create('client_tag', function(Blueprint $table)
		{
			$table->integer('client_id')->unsigned()->index();
			$table->integer('tag_id')->unsigned()->index();
			$table->foreign('client_id')->on('clients')->references('id')->onDelete('cascade');
			$table->foreign('tag_id')->on('tags')->references('id')->onDelete('cascade');
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
		Schema::drop('client_tag');
		Schema::drop('tags');
	}

}
