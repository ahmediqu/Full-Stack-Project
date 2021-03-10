<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id','father_name', 'mother_name', 'guardian_name', 'student_contact_number', 'student_contact_no', 'parent_contact_no','student_nid_no','student_email', 'student_present_address'
    ];
}
