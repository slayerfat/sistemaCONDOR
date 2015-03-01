<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model {

	/**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'banks';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name'];

  /**
   * relacion 1aN
   */
  public function cuentas(){
    return $this->hasMany('App\Account');
  }

}
