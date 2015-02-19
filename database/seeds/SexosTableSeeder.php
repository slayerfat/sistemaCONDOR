<?php

use Illuminate\Database\Seeder;

class SexosTableSeeder extends Seeder {

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
      App\Sex::create([
        'description' => $perfil
      ]);
    endforeach;
    $this->command->info('los sexos fueron creados por el elegido.');
  }

}
