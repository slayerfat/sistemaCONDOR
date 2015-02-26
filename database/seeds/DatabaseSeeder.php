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
    
    $this->call('SexosTableSeeder');
    $this->call('PerfilesTableSeeder');
    $this->call('NeoTableSeeder');
    $this->call('UsuariosTableSeeder');
    $this->call('EstadosTableSeeder');
    $this->call('MunicipiosTableSeeder');
    $this->call('ParroquiasTableSeeder');
    $this->call('DireccionesTableSeeder');
    $this->call('EdificiosTableSeeder');
    $this->call('ApartamentosTableSeeder');
    $this->call('ApartamentoPersonaTableSeeder');
    $this->call('TipoMensajesTableSeeder');
    $this->call('TipoEventosTableSeeder');
    $this->call('ElRestoDeApartamentosTableSeeder');
    $this->call('EventosTableSeeder');
    $this->call('MensajesTableSeeder');
    $this->call('TipoDeMovimientosTableSeeder');
    $this->call('BancosTableSeeder');
    $this->call('CuentasTableSeeder');
    $this->call('GestionFamiliearTableSeeder');
  }

}
