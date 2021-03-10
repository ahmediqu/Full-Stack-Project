<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAcademicInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id','examination_id', 'roll_no', 'registration_no', 'passing_year', 'board_id', 'gpa'
    ];

}
