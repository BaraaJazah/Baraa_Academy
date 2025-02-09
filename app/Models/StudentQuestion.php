<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQuestion extends Model
{
    use HasFactory;
    protected $fillable = [ 'questions_id' , 'student_tests_id' , 'score' , 'is_exam_ques'];

}
