->references('id')<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDirecciones extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('direcciones', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('parroquia_id')->unsigned();
      $table->foreign('parroquia_id')->references('id')->on('parroquias');
      $table->string('direccion_exacta')->nullable()->default('-');
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
    Schema::drop('direcciones');
  }

}
