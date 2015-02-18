<?php

use Illuminate\Database\Seeder;

class PisosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $neo = App\User::find(1);
    foreach(range(1, 10) as $index):
      App\Piso::create([
        'Descripcion'  => "Piso $index",
        'created_by'   => $neo->id,
        'updated_by'   => $neo->id
      ]);
    endforeach;
    $this->command->info('los pisos del edificio fueron creados por el elegido.');
  }

}
