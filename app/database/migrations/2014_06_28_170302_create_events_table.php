<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($table)
		{
		    $table->increments('id');

		    // event name
		    $table->string('title', 255);
		    $table->text('description');
		    $table->text('place', 255);
		    $table->dateTime('start_date');
		    $table->dateTime('end_date');
		    
		    // duration time 
		    $table->string('duration', 255);

		    $table->string('contact_no1', 15);
		    $table->string('contact_no2', 15);


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
		Schema::drop('events');
	}

}
