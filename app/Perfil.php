<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model {

  protected $table = 'perfiles';

  protected $fillable = ['descripcion'];

  /**
   * la asociacion entre usuarios y perfiles en la base de datos
   */
  public function usuarios(){
    return $this->belongsToMany('App\User', 'perfil_usuario', 'perfil_id', 'usuario_id');
  }

}
