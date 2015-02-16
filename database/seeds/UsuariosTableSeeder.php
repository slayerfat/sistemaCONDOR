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
    $faker = Faker::create();

      foreach(range(1, 5) as $index)
      {
        User::create([
          'email' => $faker->email(),
          'name' => $faker->name(),
          'password' => Hash::make('111111')
        ]);
      }
  }

}
