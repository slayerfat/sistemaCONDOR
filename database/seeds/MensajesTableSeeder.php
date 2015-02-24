<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MensajesTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('es_ES');
    $neo   = App\User::find(1);
    $tipo  = App\MessageType::where('description', 'Sugerencia')->first();
    foreach(range(1, 3) as $index):
      App\Message::create([
        'user_id'         => $neo->id,
        'message_type_id' => $tipo->id,
        'title'           => $faker->sentence(5),
        'body'            => $faker->text(),
        'created_by'      => $neo->id,
        'updated_by'      => $neo->id,
      ]);
    endforeach;
    $this->command->info('Algunos mensajes fueron creados por el elegido.');
  }

}
