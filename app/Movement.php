<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\MovementType;

class Movement extends Model {

	/**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'movements';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'account_id', 
    'user_id', 
    'movement_type_id', 
    'operation',
    'concept',
    'created_by',
    'updated_by'
  ];

  /**
   * El campo que utiliza SoftDeletes para hacer status = 0
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  public function setOperationAttribute($valor)
  {
    $tipo = MovementType::where('id', $this->movement_type_id)->first();
    if ( $tipo->description === 'Entrada' ) :
      $this->attributes['operation'] = abs($valor);
    else:
      $this->attributes['operation'] = abs($valor) * -1;
    endif;
  }

  /**
   * relacion 1aN
   */
  public function responsable(){
    return $this->belongsTo('App\User', 'user_id');
  }

  /**
   * relacion 1aN
   */
  public function cuenta(){
    return $this->belongsTo('App\Account', 'account_id');
  }

  /**
   * relacion NaM
   */
  public function items(){
    return $this->belongsToMany('App\Item');
  }

  /**
   * relacion 1aN
   */
  public function tipo(){
    return $this->belongsTo('App\MovementType', 'movement_type_id');
  }

}
