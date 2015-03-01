<?php

use Illuminate\Database\Seeder;

class TipoDeMovimientosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $datos = ['Entrada', 'Salida', 'Otro'];
    
    foreach ($datos as $tipo) :
      DB::table('movement_types')->insert([
        'description' => $tipo,
        'created_at'  => \Carbon\Carbon::now(),
        'updated_at'  => \Carbon\Carbon::now(),
        'created_by'  => 1,
        'updated_by'  => 1
      ]);
    endforeach;
    $this->command->info('El Elegido ha creado tipos de movimientos.');
  }

}
