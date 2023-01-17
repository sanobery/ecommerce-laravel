<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductList extends FormRequest
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
      'productSrc'     => 'required|mimes:jpg,jpeg,png',
      'productName'     => 'required|string|min:2|max:20',
      'productDesc'     => 'required|string|min:5|max:30',
      'categoryId'     => 'required',
    ];
  }
  
}

