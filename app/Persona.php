<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model {

  protected $table = 'personas';

  protected $dates = ['fec_nac', 'deleted_at'];

  protected $fillable = [
    'usuario_id', 
    'apartamento_id',
    'sexo_id',
    'cedula',
    'primer_nombre',
    'segundo_nombre',
    'primer_apellido',
    'segundo_apellido',
    'fec_nac'
  ];

  /**
   * la asociacion entre muchas persona y su sexo en la base de datos
   */
  public function sexos(){
    return $this->hasMany('App\Sexo', 'id', 'sexo_id');
  }

  /**
   * la asociacion entre muchas persona y su usuario en la base de datos
   */
  public function usuario(){
    return $this->belongsTo('App\User', 'usuarios', 'usuario_id');
  }

}
