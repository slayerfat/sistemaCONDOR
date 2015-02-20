<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObservacionesYComentarios extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('observations', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('message_id')->unsigned();
      $table->foreign('message_id')
            ->references('id')
            ->on('messages')
            ->onDelete('cascade');
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
      $table->text('body');
      $table->timestamps();
      $table->softDeletes();
    });

    Schema::create('comments', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('event_id')->unsigned();
      $table->foreign('event_id')
            ->references('id')
            ->on('events')
            ->onDelete('cascade');
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
      $table->text('body');
      $table->timestamps();
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
    Schema::drop('observations');
    Schema::drop('comments');
  }

}
