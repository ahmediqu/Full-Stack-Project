<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'program_id', 'photo'];

    public function studentAcademicInfo()
    {
        return $this->belongsTo(StudentPersonalInfo::class, 'student_id');
    }

    public function studentPersonalInfo()
    {
        return $this->hasMany(StudentAcademicInfo::class, 'student_id');
    }
}
