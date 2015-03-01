<?php

use Illuminate\Database\Seeder;

class TipoEventosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $datos = [
      'Problema Tecnico', 
      'Emergencia', 
      'Informacion General', 
      'Morosidad'
    ];
    
    foreach ($datos as $tipo) :
      DB::table('event_types')->insert([
        'description' => $tipo,
        'created_at'  => \Carbon\Carbon::now(),
        'updated_at'  => \Carbon\Carbon::now(),
        'created_by'  => 1,
        'updated_by'  => 1
      ]);
    endforeach;
    $this->command->info('El Elegido ha creado tipos de eventos.');
  }

}
