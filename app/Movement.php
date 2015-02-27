<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\MovementType;

class Movement extends Model {

  use SoftDeletes; 

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
    'building_id', 
    'user_id', 
    'movement_type_id', 
    'operation',
    'concept',
    'check_number',
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
   * para poner la operacion segun su tipo
   * si es entrada es un valor positivo
   * si es una salida es negativo.
   * 
   * @param float la operacion asociada al movimiento.
   */
  public function setOperationAttribute($valor)
  {
    // se chequea que tipo tiene asignada
    // la instancia de esta clase
    $tipo = MovementType::where('id', $this->movement_type_id)->first();

    // si es entrada es positivo
    // sino es negativo
    if ( $tipo->description === 'Entrada' ) :
      $this->attributes['operation'] = abs($valor);
    else:
      $this->attributes['operation'] = abs($valor) * -1;
    endif;
  }

  /**
   * para poner la el valor de cuenta a nulo
   * el valor asignado es 0
   * 
   * @param integer la llave foranea de cuenta.
   */
  public function setAccountIdAttribute($valor)
  {
    if ( $valor === '0' ) :
      $this->attributes['account_id'] = null;
    else:
      $this->attributes['account_id'] = $valor;
    endif;
  }

  /**
   * pone a nulo el numero de cheque
   * si este esta vacio.
   * 
   * @param string el numero de cheque.
   */
  public function setCheckNumberAttribute($valor)
  {
    if ( trim($valor) === '' ) :
      $this->attributes['check_number'] = null;
    else:
      $this->attributes['check_number'] = $valor;
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

  /**
   * relacion 1aN
   */
  public function edificio(){
    return $this->belongsTo('App\Building', 'building_id');
  }

}
