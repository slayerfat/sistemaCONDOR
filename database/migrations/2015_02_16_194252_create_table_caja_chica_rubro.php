<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCajaChicaRubro extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('caja_chica_rubro', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('caja_chica_id')->unsigned();
      $table->foreign('caja_chica_id')->references('id')->on('cajas_chicas');
      $table->integer('rubro_id')->unsigned();
      $table->foreign('rubro_id')->references('id')->on('rubros');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('caja_chica_rubro');
  }

}
