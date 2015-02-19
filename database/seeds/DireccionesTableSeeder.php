<?php

use Illuminate\Database\Seeder;

class DireccionesTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $elParaiso = App\Parish::find(7);
    $neo = App\User::find(1);
    App\Direction::create([
      'parish_id'       => $elParaiso->id,
      'exact_direction' => 'Urb La Paz, calle ayacucho con libertador',
      'created_by'      => $neo->id,
      'updated_by'      => $neo->id
    ]);

    $this->command->info('El edificio del Elegido necesita una direccion...');
  }

}
