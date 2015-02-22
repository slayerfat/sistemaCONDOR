<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model {

  protected $table = 'parishes';

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

  public function municipio(){
    return $this->belongsTo('App\Town');
  }

  public function direcciones(){
    return $this->hasMany('App\Direction');
  }

}
