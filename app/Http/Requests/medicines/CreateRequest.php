<?php

namespace App\Http\Requests\medicines;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'midicine_name'=>'required|unique:medicines',
            'expiration_date' => 'required',
            'price' => 'required',
           
            'status' => 'required',
            'available_quantity' => 'required',
            'entry_date' => 'required',
            //'image'=>'required|image',
          // 'usage_description'=>'required'
        ];

        }
}