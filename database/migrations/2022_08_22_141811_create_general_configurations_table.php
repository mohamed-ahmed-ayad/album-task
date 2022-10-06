<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateGeneralConfigurationsTable.
 */
class CreateGeneralConfigurationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('general_configurations', function(Blueprint $table) {
            $table->increments('id');
			$table->string('config_group')->nullable();
			$table->string('field')->nullable();
			$table->string('value')->nullable();
			$table->string('label')->nullable();
            // $table->boolean('active')->nullable()->default(true);
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
		Schema::drop('general_configurations');
	}
}
