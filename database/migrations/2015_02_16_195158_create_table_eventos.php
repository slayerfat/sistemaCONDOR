<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventos extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('eventos', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('edificio_id')->unsigned();
      $table->foreign('edificio_id')
            ->references('id')
            ->on('edificios')
            ->onDelete('cascade');
      $table->integer('autor_id')->unsigned();
      $table->foreign('autor_id')
            ->references('id')
            ->on('usuarios')
            ->onDelete('cascade');
      $table->integer('tipo_id')->unsigned();
      $table->foreign('tipo_id')->references('id')->on('evento_tipos');
      $table->string('titulo');
      $table->text('descripcion');
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
    Schema::drop('eventos');
  }

}
