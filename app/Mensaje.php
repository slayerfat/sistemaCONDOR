<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensaje extends Model {

  use SoftDeletes;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'mensajes';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'autor_id', 
    'tipo_id', 
    'titulo', 
    'descripcion', 
    'created_by', 
    'updated_by'
  ];

  /**
   * El campo que utiliza SoftDeletes para hacer status = 0
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  /**
   * un mensaje posee solo un autor
   */
  public function autor(){
    return $this->belongsTo('App\User', 'autor_id');
  }
  /**
   * un mensaje posee solo un tipo de mensaje
   */
  public function tipo(){
    return $this->belongsTo('App\MensajeTipo', 'tipo_id');
  }

}
