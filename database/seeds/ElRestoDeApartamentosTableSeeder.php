<?php

use Illuminate\Database\Seeder;

class ElRestoDeApartamentosTableSeeder extends Seeder {

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
    $j = 1;
    for ($i=2; $i <= 28; $i++) :
      App\Apartment::create([
        'building_id' => $matasiete->id,
        'user_id'     => null,
        'floor'       => $j,
        'number'      => $i,
        'created_by'  => $neo->id,
        'updated_by'  => $neo->id
      ]);
      if ($i % 3 === 0) $j++;
    endfor;

    $this->command->info('El Elegido ha creado los apartamentos del edificio!');
  }

}
