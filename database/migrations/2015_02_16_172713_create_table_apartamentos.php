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
    Schema::create('apartments', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('building_id')->unsigned();
      $table->foreign('building_id')->references('id')->on('buildings');
      $table->integer('user_id')->unsigned()->nullable();
      $table->foreign('user_id')->references('id')->on('users');
      $table->integer('floor')->unsigned();
      $table->integer('number')->unsigned();
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
