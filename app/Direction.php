<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direction extends Model {

  protected $table = 'directions';

  protected $dates = ['deleted_at'];

  protected $fillable = [
    'parish_id',
    'exact_direction',
    'created_by',
    'updated_by'
  ];

  public function parroquia(){
    return $this->belongsTo('App\Parish');
  }

  public function edificios(){
    return $this->hasMany('App\Building');
  }

}
