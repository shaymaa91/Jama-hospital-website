<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class CreatPatientRequest extends FormRequest
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
        $id = $this->route('user');
        $rules = [
            'fullname' => 'required|max:100',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'image'=>'required|image',
            'email'=>'required|email|max:50|unique:users,email,' . $id . ',id',
            'password' => 'required|string'
        ];

        return $rules;
    }
}
