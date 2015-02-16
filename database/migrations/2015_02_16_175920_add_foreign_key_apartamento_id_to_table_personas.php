<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyApartamentoIdToTablePersonas extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('personas', function(Blueprint $table)
    {
      $table->foreign('apartamento_id')->references('id')->on('apartamentos');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('personas', function(Blueprint $table)
    {
      $table->dropForeign('personas_apartamento_id_foreign');
    });
  }

}
