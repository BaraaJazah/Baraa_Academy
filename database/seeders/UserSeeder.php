<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::truncate();

        User::create([
            'name' => 'Baraa',
            'surname' => 'Jazah',
            'path' => "users/photo.png" ,
            'admin' => 2 ,
            'score'=> 0 ,
            'class'=> 1 ,
            'email' => 'beraaceze@gmail.com',
            'password' => Hash::make('beraaceze'),
        ]);
        
        User::create([
            'name' => 'oguzhan',
            'surname' => 'menemenci',
            'path' => "users/photo.png" ,
            'admin' => 1 ,
            'score'=> 0 ,
            'class'=> 1 ,
            'email' => 'teacherOne@gmail.com',
            'password' => Hash::make('teacherOne'),
        ]);

        User::create([
            'name' => 'yasin',
            'surname' => 'ortakci',
            'path' => "users/photo.png" ,
            'admin' => 1 ,
            'score'=> 0 ,
            'class'=> 1 ,
            'email' => 'teacherTwo@gmail.com',
            'password' => Hash::make('teacherTwo'),
        ]);

        User::create([
            'name' => 'Baraa',
            'surname' => 'Jazah',
            'path' => "users/photo.png" ,
            'admin' => 0 ,
            'score'=> 0 ,
            'class'=> 4 ,
            'email' => 'studentOne_4@gmail.com',
            'password' => Hash::make('studentOne_4'),
        ]);

        User::create([
            'name' => 'Ali',
            'surname' => 'Demir',
            'path' => "users/photo.png" ,
            'admin' => 0 ,
            'score'=> 0 ,
            'class'=> 4 ,
            'email' => 'studentTwo_4@gmail.com',
            'password' => Hash::make('studentTwo_4'),
        ]);

        User::create([
            'name' => 'Kerem',
            'surname' => 'Isik',
            'path' => "users/photo.png" ,
            'admin' => 0 ,
            'score'=> 0 ,
            'class'=> 3 ,
            'email' => 'studentOne_3@gmail.com',
            'password' => Hash::make('studentOne_3'),
        ]);


    }
}
