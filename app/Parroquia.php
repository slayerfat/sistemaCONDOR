<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model {

  protected $table = 'parroquias';

  protected $fillable = [
    'municipio_id',
    'descripcion'
  ];

  public function municipio(){
    return $this->belongsTo('App\Municipio', 'municipio_id');
  }

  public function direcciones(){
    return $this->hasMany('App\Direccion', 'parroquia_id');
  }

}
