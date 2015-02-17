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
    $elParaiso = App\Parroquia::find(7);
    $neo = App\User::find(1);
    App\Direccion::create([
      'parroquia_id'     => $elParaiso->id,
      'direccion_exacta' => 'Urb La Paz, calle ayacucho con libertador',
      'created_by'       => $neo->id,
      'updated_by'       => $neo->id
    ]);
  }

}
