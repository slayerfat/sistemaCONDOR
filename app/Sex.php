<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sex extends Model {

  protected $table = 'sexes';

  protected $fillable = ['description'];

  /**
   * la asociacion entre personas y sexos en la base de datos
   */
  public function persona(){
    return $this->belongsTo('App\User');
  }

}
