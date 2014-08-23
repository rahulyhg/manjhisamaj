<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educations', function($table)
		{
		    $table->increments('id');
		    $table->integer('education_category_id');
		    $table->string('title', 255);
		    
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
		Schema::drop('educations');
	}

}
