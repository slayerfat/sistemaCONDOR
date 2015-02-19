<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model {

  protected $table = 'apartments';

  protected $dates = ['deleted_at'];
  
  protected $fillable = [
    'building_id', 
    'user_id',
    'floor',
    'number',
    'created_by',
    'updated_by'
  ];

  /**
   * la relacion entre apartamentos y edificios
   * donde UN apartamento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * apartamentos.
   */
  public function edificio(){
    return $this->belongsTo('App\Building');
  }

  /**
   * la relacion entre apartamentos y propietarios
   * donde UN apartamento tiene UN propietario y
   * en UN propietario pueden haber VARIOS
   * apartamentos. (propietario = persona)
   */
  public function propietario(){
    return $this->belongsTo('App\User');
  }

}
