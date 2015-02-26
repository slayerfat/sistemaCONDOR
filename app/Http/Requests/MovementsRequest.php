<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MovementsRequest extends Request {

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
			'account_id'       => 'required|integer',
			'user_id'          => 'required|integer',
			'movement_type_id' => 'required|integer',
			'operation'        => 'required|integer|max:9999999999',
			'concept'          => 'required',
			'item_id'          => 'integer',
			'total'            => 'integer',
		];
	}

}
