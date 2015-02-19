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
  protected $table = 'usuarios';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['seudonimo', 'email', 'password'];

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
    return $this->belongsToMany('App\Perfil', 'perfil_usuario', 'usuario_id');
  }

  /**
   * la asociacion entre usuarios y perfiles en la base de datos
   */
  public function persona(){
    return $this->hasMany('App\Persona', 'usuario_id');
  }

  public function apartamentos(){
    return $this->hasManyThrough('App\Apartamento', 'App\Persona', 'usuario_id');
  }

  /**
   * un usuario tiene muchos mensajes y 
   * un mensaje pertenece a un usuario
   */
  public function mensajes(){
    return $this->hasMany('App\Mensaje', 'autor_id');
  }
  /**
   * debido a que la tabla es compleja y no se 
   * un metodo de laravel para hacer el binding
   * decidi hacerlo de esta forma
   * debido al tipo_id
   * @param  [type] $request [description]
   * @return [type]          [description]
   */
  public function insertarMensaje($request){
    $tipo = $request->input('tipos');
    $mensaje = \App\Mensaje::create([
      'autor_id'    => $this->id,
      'tipo_id'     => $tipo[0],
      'titulo'      => $request->input('titulo'),
      'descripcion' => $request->input('descripcion'),
      'created_by'  => $this->id,
      'updated_by'  => $this->id,
    ]);
    return $mensaje;
  }

}
