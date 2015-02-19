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
    $direccion = App\Direction::where(
      'exact_direction', '=', 'Urb La Paz, calle ayacucho con libertador'
    )->first();
    $neo = App\User::find(1);
    App\Building::create([
      'user_id'      => $neo->id,
      'direction_id' => $direccion->id,
      'name'         => 'Residencias Matasiete',
      'created_by'   => $neo->id,
      'updated_by'   => $neo->id
    ]);

    $this->command->info('El Elegido ha creado un edifico.');
  }

}
