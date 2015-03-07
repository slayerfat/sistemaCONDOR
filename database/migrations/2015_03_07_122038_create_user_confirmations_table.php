<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserConfirmationsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_confirmations', function(Blueprint $table)
    {
      $table->integer('id')->unsigned();
      $table->foreign('id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
      $table->string('confirmation', 32)->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('user_confirmations');
  }

}
