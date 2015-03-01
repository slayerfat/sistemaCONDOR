<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCuentas extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('accounts', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('bank_id')->unsigned();
      $table->foreign('bank_id')->references('id')->on('banks');
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');
      $table->string('bank_number');
      $table->double('balance', 15, 6);
      $table->timestamps();
      $table->integer('created_by')->unsigned();
      $table->foreign('created_by')->references('id')->on('users');
      $table->integer('updated_by')->unsigned();
      $table->foreign('updated_by')->references('id')->on('users');
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
    Schema::drop('accounts');
  }

}
