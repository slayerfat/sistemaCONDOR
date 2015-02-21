<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sex extends Model {

  protected $table = 'sexes';

  protected $fillable = ['description'];

  /**
   * la asociacion entre personas y sexos en la base de datos
   */
  public function personas(){
    return $this->hasMany('App\User');
  }

}
