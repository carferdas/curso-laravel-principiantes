<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreUserRequest extends Request
{
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
            'first_name' => 'required|string|min:3|max:60',
            'last_name' => 'required|string|min:3|max:80',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|max:60|confirmed',
            'password_confirmation' => 'required|min:4|max:60'
        ];
    }
}
