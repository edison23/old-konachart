<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugColumnToSeriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('seasons', function($table)
			{
				$table->string('slug', 250)->after('name');
			});
	}
	public function down()
	{
		Schema::table('seasons', function($table)
			{
				$table->dropColumn('slug');
			});
	}

}
