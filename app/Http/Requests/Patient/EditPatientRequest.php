<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;

class EditPatientRequest extends FormRequest
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
        $rules = [
            'fullname' => 'required|max:100',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'blood_group' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'image'=>'required|image'
        ];

        return $rules;
    }
}
