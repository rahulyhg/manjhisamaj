<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donates', function($table)
		{
		    $table->increments('id');
		    $table->string('name', 100);
		    $table->text('address');
		    $table->string('contact_no', 15);
		    $table->string('email', 100);
		    $table->decimal('amount', 7, 2);
		    $table->dateTime('donate_date');

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
		Schema::drop('donates');
	}

}
