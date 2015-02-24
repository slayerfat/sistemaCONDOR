<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model {

	/**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'accounts';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'bank_id',
    'user_id',
    'bank_number',
    'balance'
  ];

  /**
   * El campo que utiliza SoftDeletes para hacer status = 0
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  /**
   * relacion 1aN
   */
  public function banco(){
    return $this->belongsTo('App\Bank', 'bank_id');
  }

  /**
   * relacion 1aN
   */
  public function titular(){
    return $this->belongsTo('App\User', 'user_id');
  }

  /**
   * relacion 1aN
   */
  public function movimientos(){
    return $this->hasMany('App\Movement');
  }

}
