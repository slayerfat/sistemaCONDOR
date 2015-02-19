<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeTipo extends Model {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'mensaje_tipos';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['descripcion', 'created_by', 'updated_by'];

  /**
   * un tipo de mensaje tiene muchos mensajes y 
   * un mensaje pertenece a un tipo de mensaje
   */
  public function mensajes(){
    return $this->hasMany('App\Mensaje', 'autor_id');
  }

}
