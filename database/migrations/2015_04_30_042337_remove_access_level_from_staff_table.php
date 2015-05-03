<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAccessLevelFromStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staff', function(Blueprint $table) {
            $table->dropColumn('access_level');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('staff', function(Blueprint $table) {
            $table->enum('access_level', ['author', 'editor', 'admin']);
        });
	}

}
