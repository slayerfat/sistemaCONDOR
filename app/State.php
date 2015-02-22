<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

  protected $table = 'states';

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

  public function municipios(){
    return $this->hasMany('App\Towns');
  }

}
