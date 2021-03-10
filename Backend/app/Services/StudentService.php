<?php


namespace App\Services;

use App\Models\Student;
use App\Models\StudentAcademicInfo;
use App\Models\StudentPersonalInfo;

class StudentService extends BaseService
{
    public function __construct(Student $student)
    {
        $this->model = $student;
    }

    public function store()
    {
        $student = $this->model->create([
            'fullname' => $this->getAttr('fullname'),
            'program_id' => $this->getAttr('program_id'),
            'photo' => $this->uploadImage($this->getAttr('image')),
        ]);


        if ($this->getAttr('father_name')) {
            StudentPersonalInfo::create([
                'student_id' => $student->id,
                'father_name' => $this->getAttr('father_name'),
                'mother_name' => $this->getAttr('mother_name'),
                'guardian_name' => $this->getAttr('guardian_name'),
                'student_contact_no' => $this->getAttr('student_contact_no'),
                'parent_contact_no' => $this->getAttr('parent_contact_no'),
                'student_nid_no' => $this->getAttr('student_nid_no'),
                'student_email' => $this->getAttr('student_email'),
                'student_present_address' => $this->getAttr('student_present_address'),
            ]);
        }
        if ($this->getAttr('examination_id')) {
            StudentAcademicInfo::create([
                'student_id' => $student->id,
                'examination_id' => $this->getAttr('examination_id'),
                'roll_no' => $this->getAttr('roll_no'),
                'registration_no' => $this->getAttr('registration_no'),
                'passing_year' => $this->getAttr('passing_year'),
                'board_id' => $this->getAttr('board_id'),
                'gpa' => $this->getAttr('gpa'),
            ]);
        }
    }

    public function uploadImage($image)
    {
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image_full_name = $imageName;
            $destination_path = 'uploadImages/Product/';
            $image_url = $destination_path . $image_full_name;
            $success = $image->move($destination_path, $image_full_name);
            if ($success) {
                return $image_url;
            }
        }
    }
}
