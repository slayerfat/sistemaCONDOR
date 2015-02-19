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

  public function direccion(){
    return $this->belongsTo('App\Direction');
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

}
