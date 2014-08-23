<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suggestions', function($table)
		{
		    $table->increments('id');
		    $table->string('name', 100);
		    $table->string('email', 100);
		    $table->string('contact_no', 100);
		    $table->string('message', 100);

		    // 1=> approved 0=> not approved
		    $table->tinyInteger('is_approved')->default(0);

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
		Schema::drop('suggestions');
	}

}
