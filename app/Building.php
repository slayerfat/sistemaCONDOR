<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model {

  protected $table = 'buildings';

  protected $dates = ['deleted_at'];

  protected $fillable = [
    'user_id',
    'direction_id',
    'name',
    'total_floors',
    'created_by',
    'updated_by'
  ];

  /**
   * regresa los eventos paginados
   * @return object LengthAwarePaginator
   */
  public function getEventosPaginadosAttribute()
  {
    return $this->eventos()->paginate(5);
  }

  /**
   * regresa los eventos paginados
   * @return object LengthAwarePaginator
   */
  public function getMensajesPaginadosAttribute()
  {
    return $this->mensajes()->paginate(5);
  }

  /**
   * regresa los ultimos 3 eventos relacionados con el edificio
   */
  public function getUltimosEventosAttribute()
  {
    return $this->eventos()->orderBy('updated_at', 'desc')->take(3)->get();
  }

  /**
   * regresa los ultimos 3 movimientos relacionados con el edificio
   */
  public function getUltimosMovimientosAttribute()
  {
    return $this->movimientos()->orderBy('updated_at', 'desc')->take(3)->get();
  }

  /**
   * relacion 1aN
   */
  public function encargado(){
    return $this->belongsTo('App\User', 'user_id');
  }

  /**
   * relacion 1aN
   */
  public function direccion(){
    return $this->belongsTo('App\Direction', 'direction_id');
  }

  /**
   * la relacion entre apartamentos y edificios
   * donde UN apartamento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * apartamentos.
   */
  public function apartamentos(){
    return $this->hasMany('App\Apartment');
  }

  /**
   * la relacion entre eventos y edificios
   * donde UN evento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * eventos.
   */
  public function eventos(){
    return $this->hasMany('App\Event');
  }

  /**
   * la relacion entre eventos y edificios
   * donde UN evento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * eventos.
   */
  public function mensajes(){
    return $this->hasMany('App\Message');
  }

  /**
   * la relacion entre items y edificios
   * donde UN item tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * items.
   */
  public function items(){
    return $this->hasMany('App\Item');
  }

  /**
   * la relacion entre miembros de la gestiones multifamiliares y edificios
   * donde UN miembros de la gestion multifamiliar tiene VARIOS
   * edificios y en UN edificio pueden haber VARIOS
   * miembros de la gestiones multifamiliares.
   */
  public function miembrosDeGestion(){
    return $this->belongsToMany('App\User');
  }

  /**
   * la relacion entre movimientos y edificios
   * donde UN movimiento tiene UN edificio y
   * en UN edificio pueden haber VARIOS
   * movimientos.
   */
  public function movimientos(){
    return $this->hasMany('App\Movement');
  }

}
