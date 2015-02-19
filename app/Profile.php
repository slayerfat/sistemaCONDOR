<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

  protected $table = 'profiles';

  protected $fillable = ['description'];

  /**
   * la asociacion entre usuarios y perfiles en la base de datos
   */
  public function usuarios(){
    return $this->belongsToMany('App\User');
  }

}
