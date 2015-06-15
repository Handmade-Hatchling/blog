<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePathOnImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('images', function(Blueprint $table)
        {
            $table->renameColumn('path', 'filename');
            $table->string('thumb_name');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('images', function(Blueprint $table)
        {
            $table->renameColumn('filename', 'path');
            $table->dropColumn('thumb_name');
        });
	}

}
