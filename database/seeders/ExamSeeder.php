<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exam 13  Microprocessor

        Test::create([
            'course_id' => 1 ,
            'name' => 'Exam' ,
            'level' => 'hard' ,
            'is_Exam' => true ,
            'exam_shared' => 0 ,
            'exam_type' => "homework" ,
            'exma_effect' => 10 ,
            'exam_day' => "2024-07-21" ,
            'exam_hour' => "15:50:00" ,
            'exam_duration' => 10 ,
            'ques_number' => 5 ,
            'falseCancleTrue' => true ,

            ]);

        // Exam 14  cyper security

        Test::create([
            'course_id' => 2 ,
            'name' => 'Exam' ,
            'level' => 'hard' ,
            'is_Exam' => true ,
            'exam_shared' => 0 ,
            'exam_type' => "Midterm" ,
            'exma_effect' => 30 ,
            'exam_day' => "2024-07-21" ,
            'exam_hour' => "14:50:00" ,
            'exam_duration' => 10 ,
            'ques_number' => 5 ,
            'falseCancleTrue' => true ,

        ]);

        // Exam 15  Mobile

        Test::create([
            'course_id' => 3 ,
            'name' => 'Exam' ,
            'level' => 'hard' ,
            'is_Exam' => true ,
            'exam_shared' => 0 ,
            'exam_type' => "Midterm" ,
            'exma_effect' => 30 ,
            'exam_day' => "2024-07-21" ,
            'exam_hour' => "14:50:00" ,
            'exam_duration' => 10 ,
            'ques_number' => 5 ,
            'falseCancleTrue' => true ,

        ]);

    }
}
