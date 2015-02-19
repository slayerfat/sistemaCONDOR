<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model {

	/**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'event_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['description', 'created_by', 'updated_by'];

  /**
   * un tipo de mensaje tiene muchos mensajes y 
   * un mensaje pertenece a un tipo de mensaje
   */
  public function eventos(){
    return $this->hasMany('App\Event');
  }

}
