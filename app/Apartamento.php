<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model {

  protected $table = 'apartamentos';

  protected $dates = ['deleted_at'];
  
  protected $fillable = [
    'edificio_id', 
    'propietario_id',
    'piso_id',
    'numero',
    'created_by',
    'updated_by'
  ];

}
