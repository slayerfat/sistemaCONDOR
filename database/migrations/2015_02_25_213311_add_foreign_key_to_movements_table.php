<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToMovementsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('movements', function(Blueprint $table)
    {
      $table->integer('movement_type_id')->unsigned()->after('user_id');
      $table->foreign('movement_type_id')
            ->references('id')
            ->on('movement_types');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('movements', function(Blueprint $table)
    {
      $table->dropForeign('movements_movement_type_id_foreign');
      $table->dropColumn('movement_type_id');
    });
  }

}
