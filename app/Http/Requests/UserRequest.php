<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    // validacion de fecha, por ahora es de 10 años o antes
    $fecha = date('Y-m-d', strtotime('-10 year'));
    return [
      'sex_id'          => 'required|integer',
      'email'           => 'required|email|unique:users',
      'identity_card'   => 'required|min:6|max:8|unique:users',
      'first_name'      => 'required|regex:/^[a-zA-Z-_áéíóúÁÉÍÓÚÑñ\']+$/|min:3|max:20',
      'middle_name'     => 'regex:/^[a-zA-Z-_áéíóúÁÉÍÓÚÑñ\']+$/|min:3|max:20',
      'first_surname'   => 'required|regex:/^[a-zA-Z-_áéíóúÁÉÍÓÚÑñ\']+$/|min:3|max:20',
      'last_surname'    => 'regex:/^[a-zA-Z-_áéíóúÁÉÍÓÚÑñ\']+$/|min:3|max:20',
      'birth_date'      => "date|before:$fecha",
      'phone'           => 'numeric',
      'aditional_phone' => 'numeric'
    ];
  }

}
