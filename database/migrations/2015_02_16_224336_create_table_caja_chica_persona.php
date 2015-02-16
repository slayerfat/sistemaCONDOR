<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCajaChicaPersona extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caja_chica_persona', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('persona_id')->unsigned();
      $table->foreign('persona_id')->references('id')->on('personas');
      $table->integer('caja_chica_id')->unsigned();
      $table->foreign('caja_chica_id')->references('id')->on('cajas_chicas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('caja_chica_persona');
	}

}
