<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function($table)
		{
		    $table->increments('id');
		    $table->integer('user_id');
		    $table->string('title', 255);
		    $table->string('file_name', 255);
		    $table->string('file_ext', 10);

		    // 0=> Not Default, 1=> default
	     	$table->tinyInteger('is_default_picture')->default(0);
		    
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
		Schema::drop('photos');
	}

}
