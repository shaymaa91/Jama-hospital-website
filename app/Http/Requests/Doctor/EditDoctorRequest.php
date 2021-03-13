<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class EditDoctorRequest extends FormRequest
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
            'degree' => 'required',
            'date_of_birth' => 'required',
            'specialize_id' => 'required',
            'department_id' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'salary' => 'required',
            'short_bio' => 'required',
            'status' => 'required'
        ];

        return $rules;
    }
}
