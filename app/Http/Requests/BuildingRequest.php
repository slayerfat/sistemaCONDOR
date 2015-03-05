<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BuildingRequest extends Request {

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
      'name'            => 'required|min :3|max  :255',
      'user_id'         => 'required|integer',
      'exact_direction' => 'required|min :10|max :255',
      'parish_id'       => 'required|integer',
    ];
  }

}
