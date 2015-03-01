<?php namespace App\Http\Controllers\Otros;

use Auth;
use Mail;
use App\User;

class EnviarEmail {

  /**
   * Se chequean los administradores especificos relacionados
   * con el edificio del evento y se les envia
   * un correo de notificacion.
   *
   * @param  array    $evento  el array con los datos relacionados
   * @return boolean
   */
  static function obtenerEmailAdministradores($evento)
  {
    // por si acaso...
    if (!isset($evento)) return null;

    // se buscan los administradores
    $usuario = User::administradores()->get();
    // los emails
    $emails = [];

    // de los usuarios se busca su edificio
    // para no mandar email a todos los usuarios del sistema.
    foreach ($usuario as $administrador) :
      $email = $administrador->email;
      foreach ($administrador->apartamentos as $apartamento) :
        if ($apartamento->building_id === $evento->building_id) :
          if ($email){ $emails[] = $email; }
        endif;
      endforeach;
    endforeach;

    return $emails;
  }

  /**
   * Se chequean los usuarios especificos relacionados
   * con el edificio del evento y se les envia
   * un correo de notificacion.
   *
   * @param  array    $data  el array con los datos relacionados
   * @return boolean
   */
  static function obtenerEmailUsuarios($evento)
  {
    // por si acaso...
    if (!isset($evento)) return null;

    // se buscan los usuarios
    $usuarios = User::all();
    // los emails
    $emails = [];
    // de los usuarios se busca su edificio
    // para no mandar email a todos los usuarios del sistema.
    foreach ($usuarios as $usuario) :
      $email = $usuario->email;
      foreach ($usuario->apartamentos as $apartamento) :
        if ($apartamento->building_id === $evento->building_id) :
          if ($email){ $emails[] = $email; }
        endif;
      endforeach;
    endforeach;

    return $emails;
  }

  /**
   * Se envia los correos deseados
   * con el edificio del evento y se les envia
   * un correo de notificacion.
   *
   * @param  array    $data  el array con los datos relacionados
   * @return boolean
   */
  static function enviarEmail($data, $emails)
  {
    // por si acaso...
    if (!isset($data) and !isset($email)) return null;

    Mail::send(['emails.eventCreated', 'emails.eventCreatedPlain'], $data, function($message) use ($email){
      $message->to($administrador->email)->subject('Nuevo Evento en sistemaCONDOR.');
    });

    return true;
  }
}
