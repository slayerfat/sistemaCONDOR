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
    'fec_nac',
    'created_by',
    'updated_by'
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
    return $this->belongsTo('App\User');
  }

  /**
   * la asociacion entre personas y apartamentos en la base de datos
   * en donde los parametros son 
   * ('el modelo', 'el pivote', 'su llave foranea en pivote')
   */
  public function apartamentos(){
    return $this->belongsToMany('App\Apartamento', 'apartamento_persona', 'persona_id');
  }

  public function piso(){
    return $this->hasManyThrough('App\Piso', 'App\Apartamento', 'algo', 'sexo');
  }

  /**
   * la relacion entre personas y propiedades
   * donde UN persona tiene UNA propiedad y
   * en UNA Persona puede tener VARIAS
   * propiedades. (persona = propietario)
   */
  public function propiedades(){
    return $this->hasMany('App\Apartamento');
  }

}
