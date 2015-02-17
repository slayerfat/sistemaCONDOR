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
   */
  public function perfiles(){
    return $this->belongsToMany('App\Perfil', 'perfil_usuario', 'perfil_id', 'usuario_id');
  }

  /**
   * la asociacion entre usuarios y perfiles en la base de datos
   */
  public function personas(){
    return $this->hasMany('App\Persona', 'id', 'usuario_id');
  }
}
