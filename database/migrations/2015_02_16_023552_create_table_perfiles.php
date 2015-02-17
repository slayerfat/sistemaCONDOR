<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerfiles extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('perfiles', function(Blueprint $table)
    {
      $table->increments('id');
      $table->string('descripcion');
      $table->timestamps();
    });
    App\Perfil::create([
      'descripcion' => 'El Elegido'
    ]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('perfiles');
  }

}
