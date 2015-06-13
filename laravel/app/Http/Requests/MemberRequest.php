<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MemberRequest extends Request {

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
		$member = $this->member;
		//print_r($this->segment(2));die;
		switch ($this->method) {
			case 'POST':
				return [
					'name' => 'required|Min:3|Max:255',
					'address' => 'required',
					'phone' => 'required|numeric',
					'dob' => 'required',
					'email' => 'required|between:3,255|email|unique:members,email'
				];
				break;
			case 'PATCH':
				return [
					'name' => 'required|Min:3|Max:255',
					'address' => 'required',
					'phone' => 'required|numeric',
					'dob' => 'required',
					'email' => 'required|between:3,255|email|unique:members,email,'.$this->segment(2)
				];
			default:break;
		}
		
	}

}
