<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuejas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quejas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('autor_id')->unsigned();
			$table->foreign('autor_id')->references('id')->on('usuarios');
			$table->integer('tipo_id')->unsigned();
			$table->foreign('tipo_id')->references('id')->on('queja_tipos');
      $table->string('titulo');
      $table->text('descripcion');
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
		Schema::drop('quejas');
	}

}
