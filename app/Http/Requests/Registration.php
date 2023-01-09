<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class Registration extends FormRequest
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
            'firstName' => 'required|alpha|min:3|max:10',
            'lastName'  => 'required|alpha|min:3|max:10',
            'email'     => 'required|email|unique:user_registers,email',
            'password'  => ['required',
                            Password::min(8)->letters()->numbers()->mixedCase()->symbols()
                            ],
        ];
    }

    public function messages()
    {
        return[
            'firstName.required' => 'first Name is required',
            'firstName.alpha'    => 'Only Alphabets are allowed',
            'firstName.min'      => 'Minimum characters should be 3',
            'lastName.required'  => 'last Name is required',
            'lastName.alpha'     => 'Only Alphabets are allowed',
            'lastName.min'       => 'Minimum characters should be 3',
            'email.required'     => 'email is required',
            'email.unique'       => 'Registered User Log-In'
        ];  
    }
}
