<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('es_ES');

    foreach(range(1, 5) as $index):
      App\User::create([
        'seudonimo' => $faker->userName(),
        'email' => $faker->email(),
        'password' => Hash::make('111111')
      ]);
    endforeach;
  }

}
