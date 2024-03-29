<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class CreatDoctorRequest extends FormRequest
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
            'degree' => 'required',
            'date_of_birth' => 'required',
            'specialize_id' => 'required',
            'department_id' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'salary' => 'required',
            'image'=>'required|image',
            'short_bio' => 'required',
            'status' => 'required',
            'email'=>'required|email|max:50|unique:users,email,' . $id . ',id',
            'password' => 'required|string'
        ];

        return $rules;
    }
}
