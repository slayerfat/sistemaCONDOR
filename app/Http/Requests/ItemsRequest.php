<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ItemsRequest extends Request {

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
      'building_id' => 'required|integer',
      'description' => 'required|string|min:3|max:255',
      'total'       => 'integer|max:9999999999'
    ];
  }

}
