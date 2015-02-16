<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSexos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sexos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion', 30);
			$table->timestamps();
			$table->integer('created_by')->unsigned();
			$table->foreign('created_by')->on('usuarios');
			$table->integer('updated_by')->unsigned();
			$table->foreign('updated_by')->on('usuarios');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sexos');
	}

}
