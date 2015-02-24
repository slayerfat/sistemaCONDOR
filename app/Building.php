<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model {

  protected $table = 'buildings';

  protected $dates = ['deleted_at'];

  protected $fillable = [
    'user_id', 
    'direction_id',
    'name',
    'created_by',
    'updated_by'
  ];

  public function encargado(){
    return $this->belongsTo('App\User', 'user_id');
  }

  public function direccion(){
    return $this->belongsTo('App\Direction', 'direction_id');
  }

  /**
   * la relacion entre apartamentos y edificios
   * donde UN apartamento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * apartamentos.
   */
  public function apartamentos(){
    return $this->hasMany('App\Apartment');
  }

  /**
   * la relacion entre eventos y edificios
   * donde UN evento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * eventos.
   */
  public function eventos(){
    return $this->hasMany('App\Event');
  }

  /**
   * la relacion entre items y edificios
   * donde UN item tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * items.
   */
  public function items(){
    return $this->hasMany('App\Item');
  }

  public function habitantes(){
    return $this->hasManyThrough('App\User', 'App\Apartment');
  }

}
