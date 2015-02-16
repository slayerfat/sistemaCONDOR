<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApartamentoPersona extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apartamento_persona', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('persona_id')->unsigned();
      $table->foreign('persona_id')->references('id')->on('personas');
      $table->integer('apartamento_id')->unsigned();
      $table->foreign('apartamento_id')->references('id')->on('apartamentos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apartamento_persona');
	}

}
