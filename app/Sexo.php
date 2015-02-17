<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model {

  protected $table = 'sexos';

  protected $fillable = ['descripcion'];

  /**
   * la asociacion entre personas y sexos en la base de datos
   */
  public function persona(){
    return $this->belongsTo('App\Persona');
  }

}
