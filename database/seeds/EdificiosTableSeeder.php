<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

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
    // $faker = Faker::create('es_ES');

    // foreach(range(1, 4) as $index):
    //   App\Edificio::create([
    //     'encargado_id' => ,
    //     'direccion_id' => ,
    //     'nombre'       => ,
    //     'created_by'   => ,
    //     'updated_by'   =>
    //   ]);
    // endforeach;
  }

}
