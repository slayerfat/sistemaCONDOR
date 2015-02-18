<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();

    $this->call('NeoTableSeeder');
    $this->call('PerfilesTableSeeder');
    $this->call('UsuariosTableSeeder');
    $this->call('SexosTableSeeder');
    $this->call('EstadosTableSeeder');
    $this->call('MunicipiosTableSeeder');
    $this->call('ParroquiasTableSeeder');
    $this->call('DireccionesTableSeeder');
    $this->call('EdificiosTableSeeder');
    $this->call('PisosTableSeeder');
    $this->call('PersonasTableSeeder');
    $this->call('ApartamentosTableSeeder');
    $this->call('ApartamentoPersonaTableSeeder');
  }

}
