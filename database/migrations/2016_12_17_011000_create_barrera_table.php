<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBarreraTable
 */
class CreateBarreraTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('barreras', function (Blueprint $table) {
			$table->increments('id')->unsigned(),
			$table->string('name'),
			$table->string('description')->nullable(),
			$table->string('address')->nullable(),
			$table->integer('zip')->nullable(),
			$table->string('city')->nullable(),
			$table->string('latitude'),
			$table->string('longitude'),
			$table->integer('user_id'),
			$table->string('type'),
			$table->boolean('temporary')->default(false),
			$table->timestamps(),
			$table->softDeletes()
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('barreras');
	}
}
