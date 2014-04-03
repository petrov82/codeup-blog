<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
		    $table->string('first_name', 50);
		    $table->string('last_name', 50);
		    $table->string('user_name', 20)->unique();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table) {
		    $table->dropColumn('first_name');
		    $table->dropColumn('last_name');
		    $table->dropColumn('user_name');
		});
	}

}
