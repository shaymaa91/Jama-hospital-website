<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class CreateDRequest extends FormRequest
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
            'fullname'=>'required|max:50',
            'degree'=>'required|max:50',
           'date_of_birth'=> 'required|max:50',
           'username'=>'required|max:50',
           'address'=>'required|max:50',
           'mobile'=>'required|max:50',
           'salary'=>'required|max:50',
           'image'=>'required',
           'short_bio'=> 'required|max:50',
           'status'=> 'required|max:100',
           'gender'=>'required|max:100',
           'specialist'=>'required',
           'department'=> 'required',
           'city'=>'required',
           
        ];
    }
}