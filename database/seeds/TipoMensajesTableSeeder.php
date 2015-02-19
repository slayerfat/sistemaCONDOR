<?php

use Illuminate\Database\Seeder;

class TipoMensajesTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $datos = ['Sugerencia', 'Queja', 'Comentario'];
    
    foreach ($datos as $tipo) :
      DB::table('mensaje_tipos')->insert([
        'descripcion' => $tipo,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
        'created_by' => 1,
        'updated_by' => 1
      ]);
    endforeach;
    $this->command->info('El Elegido ha creado tipos de mensajes.');
  }

}
