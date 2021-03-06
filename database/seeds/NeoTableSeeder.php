<?php

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
    $sexo = App\Sex::where('description', 'Masculino')->first();
    $admin = App\Profile::where('description', 'Administrador')->first();
    $neo = App\User::create([
      'username'        => env('APP_USER'),
      'email'           => env('APP_USER_EMAIL'),
      'password'        => Hash::make( env('APP_USER_PASSWORD') ),
      'sex_id'          => $sexo->id,
      'profile_id'      => $admin->id,
      'identity_card'   => '10000000',
      'first_name'      => 'Keanu',
      'middle_name'     => 'Charles',
      'first_surname'   => 'Reaves',
      'birth_date'      => '1964-09-02',
      'phone'           => '01234567890',
      'aditional_phone' => '11234567891'
    ]);

    $this->command->info('EL ELEGIDO HA SIDO CREADO!');
  }

}
