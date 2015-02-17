<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerfilUsuario extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('perfil_usuario', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('perfil_id')->unsigned();
      $table->foreign('perfil_id')->references('id')->on('perfiles');
      $table->integer('usuario_id')->unsigned();
      $table->foreign('usuario_id')->references('id')->on('usuarios');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('perfil_usuario');
  }

}
