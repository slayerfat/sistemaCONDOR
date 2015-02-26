<?php

use Illuminate\Database\Seeder;

class GestionFamiliearTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $neo = \App\User::where('username', 'neo')->first();
    $matasiste = \App\Building::where('name', 'Residencias Matasiete')->first();
    DB::table('building_user')->insert([
      'user_id' => $neo->id,
      'building_id' => $matasiste->id
    ]);
    $this->command->info('El Elegido ha creado la Gestion Multifamiliar!');
  }

}
