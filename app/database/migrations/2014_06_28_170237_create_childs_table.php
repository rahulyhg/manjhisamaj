<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('childs', function($table)
		{
		    $table->increments('id');
		    $table->string('name', 100);
		    $table->string('profile_picture', 255);
		    $table->string('father_name', 100);
		    $table->text('address');
		    $table->string('class', 100);
		    $table->string('school', 100);
		    $table->string('percent', 100);

		    // 1=> archived , 0=> not archived
	     	$table->tinyInteger('is_archived')->default(0);

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
		Schema::drop('childs');
	}

}
