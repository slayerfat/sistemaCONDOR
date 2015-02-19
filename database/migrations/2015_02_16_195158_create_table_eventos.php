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
    Schema::create('events', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('building_id')->unsigned();
      $table->foreign('building_id')
            ->references('id')
            ->on('buildings')
            ->onDelete('cascade');
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
      $table->integer('event_type_id')->unsigned();
      $table->foreign('event_type_id')->references('id')->on('event_types');
      $table->string('title');
      $table->text('body');
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
