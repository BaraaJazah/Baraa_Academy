<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function insert(Request $request ){

        $request->validate([
            'course_id'   => ['required' , 'max:255'],
            'name'        => ['required' , 'string' , 'max:255'] ,
            'level'       => ['required' , 'string' , 'max:255'] ,
        ]);

        Test::create([
            'course_id' => $request->course_id,
            'name' => $request->name,
            'level' => $request->level,
        ]);

        return redirect()->back()->with('addmessage' , 'The Test Added Successfully : )');


    }


    public function insertExam(Request $request ){



        $request->validate([
            'course_id'         => ['required' , 'max:255'],
            'exam_type'         => ['required' , 'string' , 'max:255']   ,
            'exam_effect'       => ['required' , 'integer' , 'max:255']   ,
            'exam_day'          => ['required' , 'date'   , 'max:255']   ,
            'exam_hour'         => ['required' , 'date_format:H:i' , 'max:255']   ,
            'ques_number'       => ['required' , 'integer' , 'max:255']   ,
            'exam_duration'     => ['required' , 'integer' , 'max:255']   ,
        ]);

        Test::create([
            'course_id' => $request->course_id,
            'name' => "Exam",
            'level' => "easy",

            'exam_type'   => $request->exam_type ,
            'exma_effect' => $request->exam_effect ,
            'exam_day'    => $request->exam_day ,
            'exam_hour'   => $request->exam_hour ,
            'ques_number' => $request->ques_number ,
            'exam_duration' => $request->exam_duration ,
            'falseCancleTrue' => $request->false_cancle_true  ? true : false ,

            'is_Exam'  => 1 ,
            'exam_shared' => 0 ,

        ]);

        return redirect()->back()->with('addmessage' , 'The Exam Added Successfully : )');


    }

    public function delete($id){

        Test::destroy($id);
        return redirect()->back()->with('deletemessage' , 'The Course Deleted Successfully : )');

    }


    public function deleteExam($id){

        Test::destroy($id);
        return redirect()->route('add.exam');

    }


    public function share_exam($id)
    {
        if (Test::find($id)){

            $test = Test::find($id);

            $test->update([
                'exam_shared' => 1 ,
            ]);
            return redirect()->back()->with('addmessage' , 'The Exam Shared Successfully : )');


        }else{
            return view('error');
        }
    }

    public function cancle_sharing($id)
    {

        if (Test::find($id)){

            $test = Test::find($id);
            $test->update([
                'exam_shared' => 0 ,
            ]);
            return redirect()->back()->with('addmessage' , 'The Exam Sharing Cancled Successfully : )');

        }else{
            return view('error');
        }

    }

}
