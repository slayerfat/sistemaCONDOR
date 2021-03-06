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
    $perfil = \App\Profile::where('description', 'usuario')->first();

    foreach(range(1, 5) as $index):
      App\User::create([
        'username'        => $faker->userName(),
        'email'           => $faker->email(),
        'password'        => Hash::make( env('APP_USERS_PASSWORD') ),
        'sex_id'          => rand(1,2),
        'profile_id'      => $perfil->id,
        'identity_card'   => rand(99999, 99999999),
        'first_name'      => $faker->firstName(),
        'middle_name'     => $faker->firstName(),
        'first_surname'   => $faker->lastName(),
        'last_surname'    => $faker->lastName(),
        'birth_date'      => $faker->date($format = 'Y-m-d', $max = '-10 years'),
        'phone'           => $faker->phoneNumber(),
        'aditional_phone' => $faker->phoneNumber()
      ]);
    endforeach;

    $this->command->info('Usuarios del sistema fueron creados por el Elegido!');
  }

}
