<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePersonas extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('personas', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('usuario_id')->unsigned();
      $table->foreign('usuario_id')->references('id')->on('usuarios');
      $table->integer('sexo_id')->unsigned();
      $table->foreign('sexo_id')->references('id')->on('sexos');
      $table->string('cedula')->unique();
      $table->string('primer_nombre');
      $table->string('segundo_nombre')->nullable()->default('-');
      $table->string('primer_apellido');
      $table->string('segundo_apellido')->nullable()->default('-');
      $table->date('fec_nac');
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
    Schema::drop('personas');
  }

}
