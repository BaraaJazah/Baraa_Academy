<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTest extends Model
{
    use HasFactory;
    protected $fillable = [ 'tests_id', 'student_courses_id' , 'score' , 'key' ,'true_num' ,
                            'fasle_num','empty_num','exam_submit'];

    public function StudentQuestion() {
        return $this->hasMany(StudentQuestion::class , 'student_tests_id');
    }


}
