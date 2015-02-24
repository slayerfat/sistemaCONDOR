<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model {

	/**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'items';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'building_id', 
    'description', 
    'total',
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
   * relacion 1aN
   */
  public function edificio(){
    return $this->belongsTo('App\Building', 'building_id');
  }

  /**
   * relacion NaM
   */
  public function movimientos(){
    return $this->belongsToMany('App\Movement');
  }


}
