<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

  use Authenticatable, CanResetPassword, SoftDeletes; 

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'username', 
    'email', 
    'password', 
    'identity_card',
    'first_name', 
    'middle_name',
    'first_surname', 
    'last_surname',
    'sex_id', 
    'birth_date'
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];

  /**
   * El campo que utiliza SoftDeletes para hacer status = 0
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  /**
   * la asociacion entre usuarios y perfiles en la base de datos
   * en donde los parametros son 
   * ('el modelo', 'el pivote', 'su llave foranea en pivote')
   */
  public function perfiles(){
    return $this->belongsToMany('App\Profile');
  }

  /**
   * un usuario puede tener muchos apartamentos
   * esto es una relacion NaM
   */
  public function apartamentos(){
    return $this->belongsToMany('App\Apartment');
  }

  /**
   * las propiedades (apartamentos) de un usuario
   * esto es una relacion 1aN
   * @return [type] [description]
   */
  public function propiedades(){
    return $this->hasMany('App\Apartment');
  }

  /**
   * un usuario tiene muchos mensajes y 
   * un mensaje pertenece a un usuario
   */
  public function mensajes(){
    return $this->hasMany('App\Message');
  }

  /**
   * debido a que no se todava implementar
   * laravel correctamente tengo que
   * hacer esta mamarrachada
   */
  public function insertarMensaje($request){
    $types   = $request->input('types');
    $mensaje = \App\Message::create([
      'user_id'         => $this->id,
      'message_types_id' => $types[0],
      'title'           => $request->input('title'),
      'description'     => $request->input('description'),
      'created_by'      => $this->id,
      'updated_by'      => $this->id
    ]);
    return $mensaje;
  }

}
