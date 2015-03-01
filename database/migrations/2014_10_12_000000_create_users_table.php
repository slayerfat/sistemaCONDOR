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
      $table->integer('profile_id')->unsigned();
      $table->string('email')->unique()->index();
      $table->string('password', 60);
      $table->string('username')->index();
      $table->string('identity_card', 8)->unique()->index();
      $table->string('first_name', 20);
      $table->string('middle_name', 20)->nullable();
      $table->string('first_surname', 20);
      $table->string('last_surname', 20)->nullable();
      $table->date('birth_date')->nullable();
      $table->string('phone')->nullable();
      $table->string('aditional_phone')->nullable();
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
