<?php

use Illuminate\Database\Seeder;

class BancosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $datos = [
      'Banco de Venezuela', 
      'Banesco', 
      'Banco Provincial', 
      'Banco Industrial', 
      'Banco de la Mujer', 
      'Banco Fondo Comun', 
      'Otro'
    ];
    
    foreach ($datos as $tipo) :
      DB::table('banks')->insert([
        'description' => $tipo,
        'created_at'  => \Carbon\Carbon::now(),
        'updated_at'  => \Carbon\Carbon::now(),
        'created_by'  => 1,
        'updated_by'  => 1
      ]);
    endforeach;
    $this->command->info('El Elegido ha creado algunos bancos...');
  }

}
