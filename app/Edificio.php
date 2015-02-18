<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Edificio extends Model {

  protected $table = 'edificios';

  protected $dates = ['deleted_at'];

  protected $fillable = [
    'encargado_id', 
    'direccion_id',
    'nombre',
    'created_by',
    'updated_by'
  ];

  public function direccion(){
    return $this->belongsTo('App\Direccion', 'direccion_id');
  }

  /**
   * la relacion entre apartamentos y edificios
   * donde UN apartamento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * apartamentos.
   */
  public function apartamentos(){
    return $this->hasMany('App\Apartamento');
  }

}
