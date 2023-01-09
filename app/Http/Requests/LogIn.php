<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class LogIn extends FormRequest
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
    'email'     => 'required|email',
    'password'  => ['required',
      Password::min(8)->letters()->numbers()->mixedCase()->symbols()
      ],
    ];
  }

  public function messages()
  {
    return[
      'email.required' => 'email is required',
    ];  
  }
}
