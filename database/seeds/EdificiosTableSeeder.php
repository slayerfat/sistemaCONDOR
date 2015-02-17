<?php

use Illuminate\Database\Seeder;

class EdificiosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $direccion = App\Direccion::where(
      'direccion_exacta', '=', 'Urb La Paz, calle ayacucho con libertador'
    )->first();
    $neo = App\User::find(1);
    App\Edificio::create([
      'encargado_id' => $neo->id,
      'direccion_id' => $direccion->id,
      'nombre'       => 'Residencias Matasiete',
      'created_by'   => $neo->id,
      'updated_by'   => $neo->id
    ]);
  }

}
