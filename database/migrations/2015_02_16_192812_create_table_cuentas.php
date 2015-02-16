<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCuentas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cuentas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('banco_id')->unsigned();
			$table->foreign('banco_id')->references('id')->on('bancos');
			$table->integer('titular_id')->unsigned();
			$table->foreign('titular_id')->references('id')->on('personas');
			$table->integer('numero_bancario')->unsigned();
			$table->double('saldo', 15, 6);
			$table->timestamps();
			$table->integer('created_by')->unsigned();
      $table->foreign('created_by')->references('id')->on('usuarios');
      $table->integer('updated_by')->unsigned();
      $table->foreign('updated_by')->references('id')->on('usuarios');
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
		Schema::drop('cuentas');
	}

}
