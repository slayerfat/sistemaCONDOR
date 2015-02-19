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
    Schema::create('building_user', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
      $table->integer('building_id')->unsigned();
      $table->foreign('building_id')
            ->references('id')
            ->on('buildings')
            ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('building_user');
  }

}
