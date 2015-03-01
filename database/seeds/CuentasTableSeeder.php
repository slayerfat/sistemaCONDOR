<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CuentasTableSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $neo = \App\User::where('username', 'neo')->first();

    $bancos = \App\Bank::all();

    $faker = Faker::create('es_ES');
    foreach ($bancos as $banco) :
      foreach (range(1, 3) as $index) :
        DB::table('accounts')->insert([
          'bank_id'     => $banco->id,
          'user_id'     => $neo->id,
          'bank_number' => $faker->bankAccountNumber(),
          'balance'     => rand(500, 50000),
          'created_at'  => \Carbon\Carbon::now(),
          'updated_at'  => \Carbon\Carbon::now(),
          'created_by'  => $neo->id,
          'updated_by'  => $neo->id
        ]);
      endforeach;
    endforeach;
    $this->command->info('El Elegido ha creado las cuentas...');
  }

}
