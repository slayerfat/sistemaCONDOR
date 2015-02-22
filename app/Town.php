<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model {

  protected $table = 'towns';

  protected $fillable = [];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [
    'created_at', 
    'updated_at', 
    'created_by',
    'updated_by',
  ];

  public function estado(){
    return $this->belongsTo('App\State');
  }

  public function parroquias(){
    return $this->hasMany('App\Parish');
  }

}
