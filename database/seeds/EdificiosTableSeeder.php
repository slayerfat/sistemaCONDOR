<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class EdificiosTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('es_ES');

    foreach(range(1, 4) as $index):
      App\Edificio::create([
        'encargado_id' => ,
        'direccion_id' => ,
        'created_by'   => ,
        'updated_by'   =>
      ]);
    endforeach;
  }

}
