<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // TESTS
        // 1 - 4     cyper security
        Test::create([
            'course_id' => 2 ,
            'name' => 'Security_Test_1' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 2 ,
            'name' => 'Security_Test_2' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 2 ,
            'name' => 'Security_Test_3' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 2 ,
            'name' => 'Security_Test_4' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        // Test 5 - 8 Mobile

        Test::create([
            'course_id' => 3 ,
            'name' => 'Mobile_Test_1' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 3 ,
            'name' => 'Mobile_Test_2' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 3 ,
            'name' => 'Mobile_Test_3' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 3 ,
            'name' => 'Mobile_Test_4' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        // Test 9 - 12  Microprocessor
        Test::create([
            'course_id' => 1 ,
            'name' => 'Micro_Test_1' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 1 ,
            'name' => 'Micro_Test_2' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 1 ,
            'name' => 'Micro_Test_3' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);

        Test::create([
            'course_id' => 1 ,
            'name' => 'Micro_Test_4' ,
            'level' => 'hard' ,
            'is_Exam' => false ,
            'exam_shared' => 0 ,

        ]);


    }
}



// Test::create([
//     'course_id' => 2 ,
//     'name' => 'Test_One' ,
//     'level' => 'hard' ,
//     'is_Exam' => false ,
//     'exam_shared' => 0 ,
//     'exam_type' => "" ,
//     'exam_effect' => "" ,
//     'exam_day' => "" ,
//     'exam_hour' => "" ,
//     'exam_duration' => "" ,
//     'ques_number' => "" ,
//     'falseCancleTrue' => "" ,

// ]);

