<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserConfirmation extends Model {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'user_confirmations';

  /**
   * La tabla no posee timestamps
   *
   * @var boolean
   */
  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'confirmation'
  ];

  public function setConfirmationAttribute($valor)
  {
    $this->attributes['confirmation'] = str_random(32);
  }

  public function usuario()
  {
    return $this->belongsTo('App\User');
  }

}
