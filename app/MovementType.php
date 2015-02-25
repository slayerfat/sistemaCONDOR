<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MovementType extends Model {

	
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'movement_types';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['description', 'created_by', 'updated_by'];

  /**
   * un tipo de movimiento tiene muchos movimientos y 
   * un movimiento pertenece a un tipo de movimiento
   */
  public function movimientos(){
    return $this->hasMany('App\Movement');
  }


}
