<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model {

  use SoftDeletes;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'messages';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id', 
    'message_type_id', 
    'title', 
    'description', 
    'created_by', 
    'updated_by'
  ];

  /**
   * El campo que utiliza SoftDeletes para hacer status = 0
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  /**
   * un mensaje posee solo un autor
   */
  public function autor(){
    return $this->belongsTo('App\User');
  }
  /**
   * un mensaje posee solo un tipo de mensaje
   */
  public function tipo(){
    return $this->belongsTo('App\MenssageType', 'message_type');
  }

}
