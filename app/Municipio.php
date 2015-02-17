<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {

  protected $table = 'municipios';

  protected $fillable = [
    'estado_id',
    'descripcion'
  ];

  public function estado(){
    return $this->belongsTo('App\Estado', 'estado_id');
  }

  public function parroquias(){
    return $this->hasMany('App\Parroquia', 'municipio_id');
  }

}
