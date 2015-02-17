<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direccion extends Model {

  protected $table = 'direcciones';

  protected $dates = ['deleted_at'];

  protected $fillable = [
    'parroquia_id',
    'direccion_exacta'
  ];

  public function parroquia(){
    return $this->belongsTo('App\Parroquia', 'parroquia_id');
  }

  public function edificios(){
    return $this->hasMany('App\Edificio', 'direccion_id');
  }

}
