<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEdificios extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('edificios', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('encargado_id')->unsigned();
      $table->foreign('encargado_id')->references('id')->on('usuarios');
      $table->integer('direccion_id')->unsigned();
      $table->foreign('direccion_id')->references('id')->on('direcciones');
      $table->string('nombre');
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
    Schema::drop('edificios');
  }

}
