<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
		$table->increments('id');
		$table->string('profile_code', 10);
	     	$table->string('email', 100);
	     	$table->string('username', 20);
	     	$table->string('password', 255);
	     	$table->string('first_name', 30);
	     	$table->string('middile_name', 30);
	     	$table->string('last_name', 30);
	     	$table->dateTime('date_of_birth', 12);
	     	$table->string('age', 3);

			// 1=>male, 2=>female
	     	$table->tinyInteger('gender')->default(2);

	     	$table->text('street');
	     	$table->string('village', 60);
	     	
	     	$table->integer('city_id');
	     	$table->integer('state_id');
	     	$table->integer('country_id');

	     	$table->string('phone', 15);
	     	$table->string('mobile1', 15);
	     	$table->string('mobile2', 15);

	     	// 1=>yes, 0=>no
	     	$table->tinyInteger('marital_status')->default(0);
	     	$table->integer('caste_id');

	     	$table->string('sub_caste', 100);
	     	$table->string('gothra', 100);
	     	
	     	// foot inch (cms)
	     	$table->decimal('height', 2, 2);

	     	// kilo gram
	     	$table->decimal('weight', 3, 2);

	     	// 1=>slim, 2=>Average,  3=>Athletic 4=>Heavy
	     	$table->tinyInteger('body_type')->default(2);

	     	// 1=>Very Fair, 2=>Fair, 3=>Wheatish, 4=>Wheatish brown, 5=>Dark
	     	$table->tinyInteger('complexion')->default(3);

	     	// 1=>Normal, 2=>Physically challenged
	     	$table->tinyInteger('physical_status')->default(1);
	     	$table->text('handicap_description', 20);	     	
	     	
	     	$table->tinyInteger('highest_education');
	     	
	     	// 1=>Government, 2=>Private, 3=>Business,  4=>Defence, 5=>Self Employed, 6=> Not Working
	     	$table->tinyInteger('employeed_in')->default(2);
	     	$table->text('occupation_description', 20);
	     	$table->decimal('annual_income', 7, 2);
	     	

	     	// 1=>Vegetarian, 2=>Non-Vegetarian, 3=>Eggetarian
	     	$table->tinyInteger('food')->default(2);

	     	// 1=>No, 2=>Occasionally,     3=>Yes
	     	$table->tinyInteger('smoking')->default(1);

	     	// 1=>No, 2=>Occasionally,     3=>Yes
	     	$table->tinyInteger('drinking')->default(1);
	     	
	     	
	     	// 1=>No, 2=>Yes, 3=>don't know
	     	$table->tinyInteger('is_manglik')->default(3);


	     	// 1-12 =>list,  0=>don't know
	     	$table->tinyInteger('rashi')->default(0);
	     	

	     	// 1=>lower class, 2=>Middle class, 3=>Upper middle class, 4=>Rich,  5=>Affluent
	     	$table->tinyInteger('family_status')->default(2);
	     	
	     	// 1=>Joint, 2=>Nuclear
	     	$table->tinyInteger('family_type')->default(2);

	     	// 0=>don't know, 1=>Orthodox, 2=>Traditional, 3=>Moderate, 4=>Liberal
	     	$table->tinyInteger('family_values')->default(0);
			
			$table->string('family_origin', 255);
	     	
	     	$table->string('father_name', 100);
	     	$table->text('father_occupation');

	     	$table->string('mother_name', 100);
	     	$table->text('mother_occupation');

	     	$table->tinyInteger('brother_nos');
	     	$table->tinyInteger('brother_married');

	     	$table->tinyInteger('sister_nos');
	     	$table->tinyInteger('sister_married');

	     	$table->text('about_yourself');

	     	$table->text('partner_description');

	     	$table->string('facebook', 255);
	     	$table->string('twitter', 255);
	     	$table->string('skype', 255);

	     	// 1=> archived , 0=> not archived
	     	$table->tinyInteger('is_archived')->default(0);

	     	// 1=> enabled , 0=> disabled
	     	$table->tinyInteger('is_enabled')->default(1);
	     	$table->timestamps();
	     	$table->softDeletes();
		$table->rememberToken();


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
