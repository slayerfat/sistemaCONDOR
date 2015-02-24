<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('es_ES');
    $neo   = App\User::find(1);
    $tipo  = App\EventType::where('description', 'Informacion General')->first();
    $matasiete = App\Building::where('name', 'Residencias Matasiete')->first();
    foreach(range(1, 3) as $index):
      App\Event::create([
        'building_id'   => $matasiete->id,
        'user_id'       => $neo->id,
        'event_type_id' => $tipo->id,
        'title'         => $faker->sentence(5),
        'body'          => $faker->text(),
        'created_by'    => $neo->id,
        'updated_by'    => $neo->id,
      ]);
    endforeach;
    $this->command->info('Algunos eventos fueron creados por el elegido.');
  }

}
