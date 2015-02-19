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
    Schema::create('item_movement', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('movement_id')->unsigned();
      $table->foreign('movement_id')->references('id')->on('movements');
      $table->integer('item_id')->unsigned();
      $table->foreign('item_id')->references('id')->on('items');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('item_movement');
  }

}
