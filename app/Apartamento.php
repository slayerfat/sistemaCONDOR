<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model {

  protected $table = 'apartamentos';

  protected $dates = ['deleted_at'];
  
  protected $fillable = [
    'edificio_id', 
    'propietario_id',
    'piso_id',
    'numero',
    'created_by',
    'updated_by'
  ];

  /**
   * la asociacion entre apartamentos y personas en la base de datos
   * en donde los parametros son 
   * ('el modelo', 'el pivote', 'su llave foranea en pivote')
   */
  public function personas(){
    return $this->belongsToMany('App\Habita', 'apartamento_persona', 'apartamento_id');
  }

  /**
   * la relacion entre apartamentos y pisos
   * donde UN apartamento tiene UN piso y
   * en UN piso pueden haber VARIOS
   * apartamentos.
   */
  public function piso(){
    return $this->belongsTo('App\Piso');
  }

  /**
   * la relacion entre apartamentos y edificios
   * donde UN apartamento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * apartamentos.
   */
  public function edificio(){
    return $this->belongsTo('App\Edificio');
  }

  /**
   * la relacion entre apartamentos y propietarios
   * donde UN apartamento tiene UN propietario y
   * en UN propietario pueden haber VARIOS
   * apartamentos. (propietario = persona)
   */
  public function propietario(){
    return $this->belongsTo('App\Persona');
  }

}
