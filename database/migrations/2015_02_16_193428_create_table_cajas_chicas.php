<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCajasChicas extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('movements', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('account_id')->unsigned()->nullable();
      $table->foreign('account_id')->references('id')->on('accounts');
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');
      $table->integer('building_id')->unsigned();
      $table->foreign('building_id')->references('id')->on('buildings');
      $table->double('operation', 15, 6);
      $table->string('concept', 40);
      $table->string('check_number', 40)->nullable();
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
    Schema::drop('movements');
  }

}
