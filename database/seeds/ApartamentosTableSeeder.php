<?php

use Illuminate\Database\Seeder;

class ApartamentosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $neo = App\User::find(1);
    $matasiete = App\Building::where(
      'name', '=', 'Residencias Matasiete')->first();
    App\Apartment::create([
      'building_id' => $matasiete->id,
      'user_id'     => $neo->id,
      'floor'       => 1,
      'number'      => 1,
      'created_by'  => $neo->id,
      'updated_by'  => $neo->id
    ]);

    $this->command->info('El Elegido tiene su apartamento.');
  }

}
