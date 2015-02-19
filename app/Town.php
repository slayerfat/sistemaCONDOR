<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model {

  protected $table = 'towns';

  protected $fillable = [
    'state_id',
    'description'
  ];

  public function estado(){
    return $this->belongsTo('App\State');
  }

  public function parroquias(){
    return $this->hasMany('App\Parish');
  }

}
