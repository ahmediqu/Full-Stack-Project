<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'fullname' => 'required',
            'program_id' => 'required',
            'examination_id' => 'required',
            'roll_no' => 'required',
            'registration_no' => 'required',
            'passing_year' => 'required',
            'board_id' => 'required',
            'gpa' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'guardian_name' => 'required',
            'student_contact_no' => 'required',
            'parent_contact_no' => 'required',
            'student_present_address' => 'required',
        ];
    }
}
