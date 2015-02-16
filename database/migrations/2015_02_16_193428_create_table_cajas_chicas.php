<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCajasChicas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cajas_chicas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cuenta_id')->unsigned();
			$table->foreign('cuenta_id')->references('id')->on('cuentas');
			$table->double('movimiento', 15, 6);
			$table->string('concepto')->default('-');
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
		Schema::drop('cajas_chicas');
	}

}
