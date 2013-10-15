<?php

use Illuminate\Database\Migrations\Migration;

class CreateContentblockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contentblock', function($table){
			$table->increments('id');
			$table->binary('content');
			$table->integer('status')->default(1);
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
		Schema::drop('contentblock');
	}

}