<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApartmentsRequest extends Request {

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
			'user_id' => 'required|integer',
			'floor' => 'required|integer',
			'number' => 'required|integer|min:1|max:999',
		];
	}

}
