<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model {

  use SoftDeletes;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'messages';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id', 
    'building_id', 
    'message_type_id', 
    'title', 
    'body', 
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
   * automanticamente asigna el created_by al usuario autorizado
   */
  public function setCreatedByAttribute($valor){
    $this->attributes['created_by'] = $valor;
  }

  /**
   * automanticamente asigna el updated_by al usuario autorizado
   */
  public function setUpdatedByAttribute($valor){
    $this->attributes['updated_by'] = $valor;
  }

  /**
   * un mensaje posee solo un autor
   */
  public function autor(){
    return $this->belongsTo('App\User', 'user_id');
  }
  /**
   * un mensaje posee solo un tipo de mensaje
   */
  public function tipo(){
    return $this->belongsTo('App\MessageType', 'message_type_id');
  }

  /**
   * un mensaje posee solo edificio
   */
  public function edificio(){
    return $this->belongsTo('App\Building', 'building_id');
  }

}
