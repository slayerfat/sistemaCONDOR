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
    $matasiete = App\Edificio::where(
      'nombre', '=', 'Residencias Matasiete')->first();
    $piso = App\Piso::where('descripcion', 'like', 'Piso 1')->first();
    App\Apartamento::create([
      'edificio_id'    => $matasiete->id,
      'propietario_id' => $neo->id,
      'piso_id'        => $piso->id,
      'numero'         => 1,
      'created_by'     => $neo->id,
      'updated_by'     => $neo->id
    ]);

    $this->command->info('El Elegido tiene su apartamento.');
  }

}
