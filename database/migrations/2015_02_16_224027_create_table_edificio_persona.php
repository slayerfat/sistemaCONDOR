<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEdificioPersona extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('edificio_persona', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('persona_id')->unsigned();
      $table->foreign('persona_id')->references('id')->on('personas');
      $table->integer('edificio_id')->unsigned();
      $table->foreign('edificio_id')->references('id')->on('edificios');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('edificio_persona');
  }

}
