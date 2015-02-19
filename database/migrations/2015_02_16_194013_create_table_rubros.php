<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRubros extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('items', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('building_id')->unsigned();
      $table->foreign('building_id')->references('id')->on('buildings');
      $table->string('description');
      $table->integer('total')->unsigned();
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
    Schema::drop('items');
  }

}
