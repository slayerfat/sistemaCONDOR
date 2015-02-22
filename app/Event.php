<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model {

	use SoftDeletes;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'events';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id', 
    'building_id', 
    'event_type_id', 
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
   * un evento posee solo un autor
   */
  public function autor(){
    return $this->belongsTo('App\User', 'user_id');
  }

  /**
   * un evento posee solo un tipo de mensaje
   */
  public function tipo(){
    return $this->belongsTo('App\EventType');
  }

  /**
   * un evento posee solo un edificio
   */
  public function edificio(){
    return $this->belongsTo('App\Building');
  }

}
