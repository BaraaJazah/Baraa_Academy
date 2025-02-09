<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' , 'level' , 'course_id','is_Exam' ,'exam_shared' ,'exam_type',
                            'exma_effect','exam_day','exam_hour','exam_duration','ques_number',
                            'falseCancleTrue'];


    public function Questions() {
        return $this->hasMany(Question::class , 'test_id');
    }

    public function StudentTest() {
        return $this->hasOne(StudentTest::class , 'tests_id');
    }
}
