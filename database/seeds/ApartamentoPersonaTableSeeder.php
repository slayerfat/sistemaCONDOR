<?php

use Illuminate\Database\Seeder;

class ApartamentoPersonaTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::statement("INSERT INTO apartamento_persona 
      (persona_id, apartamento_id) 
      VALUES (1,1);");

    $this->command->info('El Elegido ahora habita en un apartamento...');
  }

}
