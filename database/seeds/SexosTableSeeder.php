<?php

use Illuminate\Database\Seeder;

class PerfilesTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $tipos = [
      'Masculino',
      'Femenino'
    ];

    foreach($tipos as $perfil):
      App\Perfil::create([
        'descripcion' => $perfil
      ]);
    endforeach;
  }

}
