<?php namespace Gym\Http\Requests;

use Gym\Http\Requests\Request;

class CreateUserRequest extends Request {

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
			'nombres'=> 'required',
            'apellidos'=> 'required',
            'cedula'=> 'required|unique:users,cedula',
            'email'=> 'required|unique:users,email',
            'type'=> 'required',

		];
	}

}
