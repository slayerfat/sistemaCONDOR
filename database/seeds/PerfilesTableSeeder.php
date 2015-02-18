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
      'Administrador',
      'Usuario',
      'Ayudante',
      'Junta de condominio',
      'Consejo Comunal'
    ];

    foreach($tipos as $perfil):
      App\Perfil::create([
        'descripcion' => $perfil
      ]);
    endforeach;
    $this->command->info('El Elegido necesita un perfil...');
  }

}
