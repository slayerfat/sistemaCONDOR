<?php namespace App\Services;

use App\User;
use App\Profile;
use App\UserConfirmation;
use Validator;
use App\Http\Controllers\Otros\EnviarEmail as Email;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  public function validator(array $data)
  {
    return Validator::make($data, [
      'username'      => 'required|max:255',
      'email'         => 'required|email|max:255|unique:users',
      'password'      => 'required|confirmed|min:6',
      'sex_id'        => 'required|integer',
      'identity_card' => 'required|integer|between:99999,99999999|unique:users',
      'first_name'    => 'required|min:3|max:20',
      'middle_name'   => 'min:3|max:20',
      'first_surname' => 'required|min:3|max:20',
      'last_surname'  => 'min:3|max:20',
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  public function create(array $data)
  {
    $perfil = Profile::where('description', 'Desactivado')->first();

    $confirmacion = new UserConfirmation(['confirmation' => true]);

    $usuario = User::create([
      'username'      => $data['username'],
      'email'         => $data['email'],
      'sex_id'        => $data['sex_id'],
      'profile_id'    => $perfil->id,
      'identity_card' => $data['identity_card'],
      'first_name'    => $data['first_name'],
      'middle_name'   => $data['middle_name'],
      'first_surname' => $data['first_surname'],
      'last_surname'  => $data['last_surname'],
      'password'      => bcrypt($data['password']),
    ]);

    $usuario->confirmacion()->save($confirmacion);

    // datos usados para enviar el email
    $data = [
      'vista'   => ['emails.confirmation', 'emails.confirmationPlain'],
      'subject' => 'Confirmacion de cuenta en sistemaCONDOR',
      'usuario' => $usuario,
    ];
    // array de destinatarios
    $emails = (array)$usuario->email;

    Email::enviarEmail($data, $emails);

    return $usuario;
  }

}
