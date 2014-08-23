<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchieversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('achievers', function($table)
		{
		    $table->increments('id');
		    $table->string('name', 100);
		    $table->string('profile_picture', 255);
		    $table->text('address');
		    $table->string('contact_no', 15);
		    $table->string('email', 100);

		    $table->string('position', 255);

		    // 1=> approved , 0=> not approved
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
		Schema::drop('achievers');
	}

}
