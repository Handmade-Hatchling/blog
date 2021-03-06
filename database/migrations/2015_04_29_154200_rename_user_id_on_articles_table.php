<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameUserIdOnArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('articles', function(Blueprint $table)
        {
            $table->dropForeign('articles_user_id_foreign');
            $table->dropColumn('user_id');

            $table->integer('staff_id')->unsigned();
            $table->foreign('staff_id')
                  ->references('id')
                  ->on('staff')
                  ->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('articles', function(Blueprint $table)
        {
            $table->dropForeign('articles_staff_id_foreign');
            $table->dropColumn('staff_id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('staff')
                  ->onDelete('cascade');
        });
	}

}
