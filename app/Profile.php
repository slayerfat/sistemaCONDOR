<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

  protected $table = 'profiles';

  protected $fillable = [];

  /**
   * la asociacion entre usuarios y perfiles en la base de datos
   */
  public function usuarios(){
    return $this->hasMany('App\User', 'user_id');
  }

}
