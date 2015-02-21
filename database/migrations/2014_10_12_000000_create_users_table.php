<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('sex_id')->unsigned();
      $table->string('email')->unique()->index();
      $table->string('password', 60);
      $table->string('username')->index();
      $table->string('identity_card')->unique()->index();
      $table->string('first_name');
      $table->string('middle_name')->nullable()->default('-');
      $table->string('first_surname');
      $table->string('last_surname')->nullable()->default('-');
      $table->date('birth_date')->nullable();
      $table->string('phone')->nullable()->default('-');
      $table->string('aditional_phone')->nullable()->default('-');
      $table->rememberToken();
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
    Schema::drop('users');
  }

}
