<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMunicipios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('municipios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('estado_id')->unsigned();
			$table->foreign('estado_id')->references('id')->on('estados');
			$table->string('descripcion');
			$table->timestamps();
			$table->integer('created_by')->unsigned();
      $table->foreign('created_by')->references('id')->on('usuarios');
      $table->integer('updated_by')->unsigned();
      $table->foreign('updated_by')->references('id')->on('usuarios');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('municipios');
	}

}
