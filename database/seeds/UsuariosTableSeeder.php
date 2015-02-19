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
        'username' => $faker->userName(),
        'email'     => $faker->email(),
        'password'  => Hash::make( env('APP_USERS_PASSWORD') ),
        'sex_id'        => rand(1,2),
        'identity_card' => rand(99999, 99999999),
        'first_name'    => $faker->firstName(),
        'middle_name'   => $faker->firstName(),
        'first_surname' => $faker->lastName(),
        'last_surname'  => $faker->lastName(),
        'birth_date'    => $faker->date($format = 'Y-m-d', $max = '-5 years')
      ]);
    endforeach;

    $this->command->info('Usuarios del sistema fueron creados por el Elegido!');
  }

}
