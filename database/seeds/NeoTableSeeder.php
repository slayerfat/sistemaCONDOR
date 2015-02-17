<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class NeoTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // crea al elegido
    App\User::create([
      'seudonimo' => env('APP_USER'),
      'email'     => env('APP_USER_EMAIL'),
      'password'  => Hash::make( env('APP_USER_PASSWORD') )
    ]);
    $neo = App\User::where('seudonimo', '=', env('APP_USER'))->first();
    // le damos al elegido su titulo
    $perfil = App\Perfil::find(1);
    $neo->perfiles()->save($perfil);
  }

}
