<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model {

  protected $table = 'estados';

  protected $fillable = [
    'descripcion'
  ];

  public function municipios(){
    return $this->hasMany('App\Municipios', 'estado_id');
  }

}
