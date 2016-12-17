<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEventsTable
 */
class CreateLeyesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leyes', function (Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('title');
			$table->string('description')->nullable();
			$table->integer('user_id');
			$table->integer('download_url')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('leyes');
	}
}
