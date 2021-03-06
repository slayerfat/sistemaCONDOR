<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

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
    return $this->belongsTo('App\Building', 'building_id');
  }

  /**
   * la relacion entre apartamentos y propietarios
   * donde UN apartamento tiene UN propietario y
   * en UN propietario pueden haber VARIOS
   * apartamentos. (propietario = persona)
   */
  public function propietario(){
    return $this->belongsTo('App\User', 'user_id');
  }

  /**
   * los habitantes que pueden habitar un apartamento
   * esto es una relacion NaM
   */
  public function habitantes(){
    return $this->belongsToMany('App\User');
  }

  static function listaHumana(Collection $apartamentos){
    foreach ($apartamentos as $apartamento) :
      $lista[] = "Apartamento ".$apartamento->number;
    endforeach;
    return isset($lista) ? $lista : null;
  }

  /**
   * si el user_id es un espacio vacio
   * se muta a null para mysql
   * @param integer $id
   */
  public function setUserIdAttribute($id)
  {
    if (trim($id) === '') :
      $this->attributes['user_id'] =  null;
    else :
      $this->attributes['user_id'] = $id;
    endif;
  }

}
