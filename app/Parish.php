<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model {

  protected $table = 'parishes';

  protected $fillable = [
    'town_id',
    'description'
  ];

  public function municipio(){
    return $this->belongsTo('App\Town');
  }

  public function direcciones(){
    return $this->hasMany('App\Direction');
  }

}
