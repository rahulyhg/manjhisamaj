<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('castes', function($table)
		{
		    $table->increments('id');
		    $table->string('title', 100);
	     	// 1=> enabled , 0=> disabled
	     	$table->tinyInteger('is_enabled')->default(1);
	     	$table->timestamps();
	     	$table->softDeletes();
	     	

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('castes');
	}

}
