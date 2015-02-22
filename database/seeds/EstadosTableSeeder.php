<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::statement("INSERT INTO states
      (id, description, created_by, updated_by, created_at, updated_at)
      VALUES
      (1, 'Distrito Capital'  , 1, 1, current_timestamp, current_timestamp),
      (2, 'Anzoátegui'        , 1, 1, current_timestamp, current_timestamp),
      (3, 'Amazonas'          , 1, 1, current_timestamp, current_timestamp),
      (4, 'Apure'             , 1, 1, current_timestamp, current_timestamp),
      (5, 'Aragua'            , 1, 1, current_timestamp, current_timestamp),
      (6, 'Barinas'           , 1, 1, current_timestamp, current_timestamp),
      (7, 'Bolívar'           , 1, 1, current_timestamp, current_timestamp),
      (8, 'Carabobo'          , 1, 1, current_timestamp, current_timestamp),
      (9, 'Cojedes'           , 1, 1, current_timestamp, current_timestamp),
      (10, 'Delta Amacuro'    , 1, 1, current_timestamp, current_timestamp),
      (11, 'Falcón'           , 1, 1, current_timestamp, current_timestamp),
      (12, 'Guárico'          , 1, 1, current_timestamp, current_timestamp),
      (13, 'Lara'             , 1, 1, current_timestamp, current_timestamp),
      (14, 'Mérida'           , 1, 1, current_timestamp, current_timestamp),
      (15, 'Miranda'          , 1, 1, current_timestamp, current_timestamp),
      (16, 'Monagas'          , 1, 1, current_timestamp, current_timestamp),
      (17, 'Nueva Esparta'    , 1, 1, current_timestamp, current_timestamp),
      (18, 'Portuguesa'       , 1, 1, current_timestamp, current_timestamp),
      (19, 'Sucre'            , 1, 1, current_timestamp, current_timestamp),
      (20, 'Táchira'          , 1, 1, current_timestamp, current_timestamp),
      (21, 'Trujillo'         , 1, 1, current_timestamp, current_timestamp),
      (22, 'Yaracuy'          , 1, 1, current_timestamp, current_timestamp),
      (23, 'Vargas'           , 1, 1, current_timestamp, current_timestamp),
      (24, 'Zulia'            , 1, 1, current_timestamp, current_timestamp);");

    $this->command->info('Los estados de venezuela fueron creados por el elegido.');
  }

}
