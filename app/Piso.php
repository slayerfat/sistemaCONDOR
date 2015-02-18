<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Piso extends Model {

	protected $table = 'pisos';

  protected $dates = ['deleted_at'];
  
  protected $fillable = [
    'numero',
    'created_by',
    'updated_by'
  ];

  /**
   * la relacion entre apartamentos y pisos
   * donde UN apartamento tiene UN piso y
   * en UN piso pueden haber VARIOS
   * apartamentos.
   */
  public function apartamentos(){
    return $this->hasMany('App\Apartamento');
  }

}
