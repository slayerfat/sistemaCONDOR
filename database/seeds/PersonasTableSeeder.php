<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $neo = App\User::find(1);
    $sexo = App\Sexo::where('descripcion', '=', 'Masculino')->first();
    App\Persona::create([
      'usuario_id'      => $neo->id,
      'sexo_id'         => $sexo->id,
      'cedula'          => '10000000',
      'primer_nombre'   => 'Keanu',
      'segundo_nombre'  => 'Charles',
      'primer_Apellido' => 'Reaves',
      'fec_nac'         => '1964-09-02',
      'created_by'      => $neo->id,
      'updated_by'      => $neo->id
    ]);
  }

}
