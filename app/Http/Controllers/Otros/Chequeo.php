<?php namespace App\Http\Controllers\Otros;

use Auth;
use App\Apartment;

class Chequeo {

  /**
   * se busca los apartamentos y su informacion relacionada
   * desde la perspectiva del usuario logeado
   * (autorizado en sistema)
   * y se regresa.
   *
   * @return object
   */
  static function obtenerApartamentos(){
    $usuario = Auth::user();
    foreach ($usuario->apartamentos as $apartamento) {
      $apartamentos = Apartment::find($apartamento->id);
    }
    return isset($apartamentos) ? $apartamentos : null;
  }



  /**
   * se busca el apartamento y su informacion relacionada
   * desde la perspectiva del usuario logeado
   * (autorizado en sistema)
   * y se regresa.
   *
   * @return object
   */
  static function obtenerPropiedades(){
    $usuario = Auth::user();
    foreach ($usuario->propiedades as $propiedad) {
      $apartamentos = Apartment::find($propiedad->id);
      $apartamentos->edificio;
      $apartamentos->propietario;
    }
    return isset($apartamentos) ? $apartamentos : null;
  }

}
