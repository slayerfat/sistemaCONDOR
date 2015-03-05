<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MultipleApartmentsRequest extends Request {

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
    return [
      'aprt_by_floor'        => 'required|integer|between :0,200',
      'first_floor'          => 'required',
      'last_floor'           => 'required',
      'first_floor_quantity' => 'integer',
      'last_floor_quantity'  => 'integer',
    ];
  }

}
