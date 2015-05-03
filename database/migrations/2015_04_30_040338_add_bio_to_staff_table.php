<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBioToStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('staff', function(Blueprint $table) {
            $table->string('bio')->null();
            $table->integer('role_id')->unsigned();

            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles');
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
            $table->dropColumn('bio');
            $table->dropForeign('staff_role_id_foreign');
            $table->dropColumn('role_id');
        });
	}

}
