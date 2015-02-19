<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model {

  protected $table = 'states';

  protected $fillable = [
    'description'
  ];

  public function municipios(){
    return $this->hasMany('App\Towns');
  }

}
