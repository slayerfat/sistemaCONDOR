<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApartamentos extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('apartamentos', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('edificio_id')->unsigned();
      $table->foreign('edificio_id')->references('id')->on('edificios');
      $table->integer('propietario_id')->unsigned()->nullable();
      $table->foreign('propietario_id')->references('id')->on('personas');
      $table->integer('piso_id')->unsigned();
      $table->foreign('piso_id')->references('id')->on('pisos');
      $table->integer('numero')->unsigned();
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
    Schema::drop('apartamentos');
  }

}
