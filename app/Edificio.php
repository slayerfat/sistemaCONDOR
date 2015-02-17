<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Edificio extends Model {

  protected $table = 'edificios';

  protected $dates = ['deleted_at'];

  protected $fillable = [
    'encargado_id', 
    'direccion_id',
    'nombre'
  ];

}
