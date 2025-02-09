<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Microprocessor' ,
            'class' => 3 ,
            'admin_id' => 2 ,
            'share' => 0 ,

        ]);

        Course::create([
            'name' => 'Cyper security' ,
            'class' => 4 ,
            'admin_id' => 2 ,
            'share' => 0 ,
        ]);

        Course::create([
            'name' => 'Mobile programming' ,
            'class' => 4 ,
            'admin_id' => 3 ,
            'share' => 0 ,
        ]);
    }
}
