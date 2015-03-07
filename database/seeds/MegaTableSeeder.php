<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class MegaTableSeeder extends Seeder {

  /**
   * Mensajes de consola completamente innecesarios pero significativos.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('es_ES');
    $neo = \App\User::where('username', 'neo')->first();
    $perfil = \App\Profile::where('description', 'Usuario')->first();

    $this->command->info('------------- MEGA 0.1 -------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: inicio, usuarios.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');

    foreach(range(1, 100) as $index):
      $this->command->info("MEGA: usuario $index");
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

    $this->command->info('MEGA: Usuarios, completo.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: inicio, Direcciones, edificios, M y E.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');

    $tipoMsj = App\MessageType::where('description', 'Sugerencia')->first();
    $tipoEvt = App\EventType::where('description', 'Informacion General')->first();

    foreach(range(1, 5) as $index):
      $this->command->info("MEGA: Direcciones $index");
      $direccion = App\Direction::create([
        'parish_id'       => rand(1,700),
        'exact_direction' => $faker->address(),
        'created_by'      => $neo->id,
        'updated_by'      => $neo->id
      ]);
      $this->command->info("MEGA: Edificio $index");
      $edf = App\Building::create([
        'user_id'      => $neo->id,
        'direction_id' => $direccion->id,
        'name'         => $faker->company(),
        'total_floors' => rand(5,20),
        'created_by'   => $neo->id,
        'updated_by'   => $neo->id
      ]);
      foreach(range(1, 3) as $indexDos):
        $this->command->info("MEGA: Edificio $index mensaje $indexDos");
        App\Message::create([
          'user_id'         => $neo->id,
          'building_id'     => $edf->id,
          'message_type_id' => $tipoMsj->id,
          'title'           => $faker->sentence(5),
          'body'            => $faker->text(),
          'created_by'      => $neo->id,
          'updated_by'      => $neo->id,
        ]);
      endforeach;
      foreach(range(1, 3) as $indexDos):
        $this->command->info("MEGA: Edificio $index evento $indexDos");
        App\Event::create([
          'building_id'   => $edf->id,
          'user_id'       => $neo->id,
          'event_type_id' => $tipoEvt->id,
          'title'         => $faker->sentence(5),
          'body'          => $faker->text(),
          'created_by'    => $neo->id,
          'updated_by'    => $neo->id,
        ]);
      endforeach;
      $this->command->info("MEGA: Bucle $index completo.");
    endforeach;
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: Direcciones, edificios, M y E, completo.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: inicio, Apartamentos.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $j = 1; // control de pisos
    $edificios = \App\Building::where('name', '!=', 'Residencias Matasiete')->get();
    foreach ($edificios as $edificio):
      $this->command->info("MEGA: Edificio $edificio->name.");
      $n = rand(10, 30); // Apartamentos
      $p = rand(2,4); // pisos
      for ($i = 1; $i <= $n; $i++) :
        $this->command->info("MEGA: Apartamento $i piso $j.");
        App\Apartment::create([
          'building_id' => $edificio->id,
          'user_id'     => null,
          'floor'       => $j,
          'number'      => $i,
          'created_by'  => $neo->id,
          'updated_by'  => $neo->id
        ]);
        if ($i % $p === 0) $j++;
      endfor;
      $i = 1;
      $j = 1;
    endforeach;
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: apartamentos, completo.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: inicio, Mensajes Matasiete.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $matasiete = App\Building::where('name', 'Residencias Matasiete')->first();
    foreach(range(1, 50) as $index):
      $this->command->info("MEGA: Matasiete: menesaje $index.");
      App\Message::create([
        'user_id'         => $neo->id,
        'building_id'     => $matasiete->id,
        'message_type_id' => $tipoMsj->id,
        'title'           => $faker->sentence(5),
        'body'            => $faker->text(),
        'created_by'      => $neo->id,
        'updated_by'      => $neo->id,
      ]);
    endforeach;
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: Mensajes Matasiete, completo.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: inicio, Eventos Matasiete.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    foreach(range(1, 100) as $index):
      $this->command->info("MEGA: Matasiete: evento $index.");
      App\Event::create([
        'building_id'   => $matasiete->id,
        'user_id'       => $neo->id,
        'event_type_id' => $tipoEvt->id,
        'title'         => $faker->sentence(5),
        'body'          => $faker->text(),
        'created_by'    => $neo->id,
        'updated_by'    => $neo->id,
      ]);
    endforeach;
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('MEGA: Eventos Matasiete, completo.');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
    $this->command->info('------------- MEGA 0.1 -------------');
    $this->command->info('------- google hire me, plz --------');
    $this->command->info('---------- slayerfat 2015 ----------');
    $this->command->info('------------------------------------');
    $this->command->info('------------------------------------');
  }

}
