<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MeteCampoForaneoAUsuariosTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('usuarios', function(Blueprint $table)
    {
      $table->integer('perfil_id')->unsigned()->index()->after('id');
      $table->foreign('perfil_id')
            ->references('id')
            ->on('perfiles')
            ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('usuarios', function(Blueprint $table)
    {
      $table->dropForeign('usuarios_perfil_id_foreign');
      $table->dropColumn('perfil_id');
    });
  }

}
