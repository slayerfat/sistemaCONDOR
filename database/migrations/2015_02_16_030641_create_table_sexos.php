<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSexos extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sexes', function(Blueprint $table)
    {
      $table->increments('id');
      $table->string('description', 30);
      $table->timestamps();
    });

    Schema::table('users', function(Blueprint $table)
    {
      $table->foreign('sex_id')->references('id')->on('sexes');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('users', function(Blueprint $table)
    {
      $table->dropForeign('users_sex_id_foreign');
    });
    Schema::drop('sexes');
  }

}
