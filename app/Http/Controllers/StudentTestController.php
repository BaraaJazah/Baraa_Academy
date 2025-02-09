<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Question;
use App\Models\StudentCourse;
use App\Models\StudentQuestion;
use App\Models\StudentTest;
use App\Models\Test;
use App\Models\User;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StudentTestController extends Controller
{

    public function go_to_quiz($id)
    {
        if(StudentTest::find($id)){

            $stdTest = StudentTest::find($id);
            $stdQuestions = $stdTest->StudentQuestion ;


            $questionDatas = Test::find($stdTest->tests_id)->Questions;
            $quesCount = count($questionDatas);

            if ($questionDatas != "[]"){


                if(view()->exists('en.user.components.tests' )){

                    return view('en.user.components.exam' , compact('questionDatas', 'id' ));

                }else{
                    return view('error');
                }

            }else{

               return Redirect::back()->withErrors("This Test Don't have Questions");
            }
        }else{
            return view('error');
        }

    }

    public function go_to_finish(Request $request , $id )
    {
        $stdTest = StudentTest::find($id);
        $stdCourse =  StudentCourse::find( $stdTest->student_courses_id );
        $numberOfQues = count($stdTest->StudentQuestion ) ;
        $trueAnswer = 0 ;
        $score = 0 ;
        foreach ($request->keys() as $key) {
            if ( str_starts_with($key, 'a')  ) {
                $question = Question::find(substr($key, 6 ));
                $stdQuestion = StudentQuestion::all()->where('questions_id' , substr($key, 6 ) )->where('student_tests_id' , $id)->first();

                if ( $question->true_answer == $request->$key ){

                    $trueAnswer++ ;
                    $stdQuestion->update([
                        'score' => 100
                    ]);
                }else {
                   $stdQuestion->update([
                        'score' => 0,
                    ]);
            }}}
        $score = ($trueAnswer * 100 ) / $numberOfQues ;
        if($score > 50){
        $allStdTests = $stdCourse->StudentTest ;
        for ($i = 0 ; $i < count($allStdTests) ; $i++){
            if ( $allStdTests[$i]->id == $stdTest->id ){
                $allStdTests[$i]->update([
                    'score' => $score  ,
                    'key' => 2 ,
                ]);
                if ( count($allStdTests) > $i+1 ){
                    for ($j = $i+1 ; $j < count($allStdTests) ; $j++){
                        $Test  = Test::find($allStdTests[$j]->tests_id);
                        if($Test->is_Exam == 0){

                            $allStdTests[$j]->update([
                                'key' => 1 ,
                            ]);
                            break;
                        }
                    }
                 }
             }
            }

        }

        $testScore = number_format((float)($score), 1, '.', '') ;


        if(view()->exists('en.user.components.testScore'  )){
            return view('en.user.components.testScore' , compact('testScore'));
        }else{
            return view('error');
        }

    }

    public function go_to_exam($id){


        if(StudentTest::find($id)){
            $stdTest = StudentTest::find($id);
            $test = Test::find($stdTest->tests_id);
            $Test_day = $test->exam_day;
           $questions = Test::find($stdTest->tests_id)->Questions;
            //  start handle time part
            $message = "" ;
            if ($stdTest->exam_submit == 1 ){
                $message = "The Exam Has Been Completed"  ;
                return redirect()->back()->with('addmessage' , $message);
            }
            $duration = $test->exam_duration;
            //  start Exam Date ( date and hour )
            $startDate = date("Y-m-d H:i:s", strtotime( $test->exam_day . $test->exam_hour )  );
            // calculate end time
            $strtTime = new DateTime( $test->exam_hour );
            $strtTime->add(new DateInterval('PT' . $duration . 'M'));
            $endTime = $strtTime->format('H:i:s');
            //  end Exam Date ( date and hour )
            $endDate = date("Y-m-d H:i:s", strtotime( $test->exam_day . $endTime )  );
            // set current Date
            date_default_timezone_set('Europe/Istanbul');
            $currentDate = date("Y-m-d H:i:s") ;
            $currentHour = date("H:i:s") ;
            $curren = $currentDate ;
            $start  = $startDate ;
            $end    = $endDate ;
            $currentDatee = new DateTime($curren);
            $endDate = new DateTime($end);
            $startDate = new DateTime($start);
            //  end handle time part
            if ($currentDatee > $endDate) {
                $examValible = false ;
                $message = "Exam Time Is Finish At " . $end ;
                return redirect()->back()->with('addmessage' , $message);
            }elseif($currentDatee < $startDate){
                $examValible = false ;
                $message = "Exam Will Start In " . $start ;
                return redirect()->back()->with('addmessage' , $message);
            }else {

//  start handle Randomly Questions part
/*
**    when student add a course will add all it's tests and exams for student_tests and all questions for student_questions
**    each student will get questions randomly and will set to this question as ( is_exam_ques = 1  )
**    will sent just questions that ( is_exam_ques = 1 )
**
*/
// calculte time duration

            $interval = $endDate->diff($currentDatee);
            $hour = $interval->format('%h');
            $minut = $interval->format('%i');
            $second = $interval->format('%s');
            $Test_duration = intval($hour)*3600 + intval($minut)*60 + intval($second) ;
            $quesKey = [];           // store keys of all question
            $randomQuesKeys = [];    // store randomly keys of question
            $questionDatas = [];        // store question of randomQuesKeys array
            foreach($questions as $questionData)
            {
                array_push($quesKey ,$questionData->id);
            }
            $randomQuesKeys = array_rand($quesKey , $test->ques_number );
            $examQuestions = StudentQuestion::all()->where('student_tests_id'  , $stdTest->id )->where('is_exam_ques' , 1);
            if ($examQuestions == '[]'){
                $allQuestions = StudentQuestion::all()->where('student_tests_id'  , $stdTest->id )->where('is_exam_ques' , 0);
                foreach($randomQuesKeys as $randomQuesKey) {
                    $randQuestion = $questions[$randomQuesKey];

                    $setExamQuestions = StudentQuestion::all()->where('student_tests_id'  , $stdTest->id )
                                                              ->where('questions_id',$randQuestion->id )->first();
                    $setExamQuestions->update([
                        'is_exam_ques' => 1,
                    ]);
                    array_push($questionDatas ,$randQuestion);
                }
            }else {
            foreach($examQuestions as $examQuestion) {
                $question = Question::all()->where('id'  , $examQuestion->questions_id )->first();
                array_push($questionDatas , $question );
              }
            }
            if ($questionDatas != "[]"){
                if(view()->exists('en.user.components.exam_page' )){
                    return view('en.user.components.exam_page' , compact('questionDatas' , 'id' , 'Test_duration','Test_day' ));
                }else{
                    return view('error');
                }
            }else{
                return Redirect::back()->withErrors("This Exam Don't have Questions");
            }
        }
        }else{
            return view('error');
        }



    }
    // finish Exam
    public function go_to_quesNext(Request $requests , $id){

        $stdTest = StudentTest::find($id);
        $stdQues = StudentQuestion::All()->where('student_tests_id' , $id);
        $Test  = Test::find($stdTest->tests_id);
        $duration = $Test->exam_duration ;
        // start date
        $startdate = date("Y-m-d h:i:s", strtotime( $Test->exam_day . $Test->exam_hour )  );
        // calculate end time
        $strtTime = new DateTime( $Test->exam_hour );
        $strtTime->add(new DateInterval('PT' . $duration . 'M'));
        $endTime = $strtTime->format('H:i:s');

        // end date
        $enddate = date("Y-m-d h:i:s", strtotime( $Test->exam_day . $endTime )  );
        date_default_timezone_set('Europe/Istanbul');
        $currentDate = date("Y-m-d h:i:s") ;

        $currentDatee = new DateTime($currentDate);
        $endDate = new DateTime($enddate);
        if ($currentDate > $endDate) {
            return redirect()->route('show.exam_error' , $id);
        }

        // answer7 : 24
        $score = 0;
        $numTrue = 0 ;
        $numFlase = 0;
        $stdExamQues = StudentQuestion::All()->where('student_tests_id' , $id)->where('is_exam_ques', 1 );
        $numEmpty = (count($stdExamQues) - ( count($requests->keys()) - 2) )  ;
        foreach ($requests->keys() as $key) {
            if ( str_starts_with($key, 'a')  ) {
                $question = Question::find(substr($key, 6));
                if ( $question->true_answer == $requests->$key ){
                    $stdTrueQuestion = StudentQuestion::all()->where('questions_id' , substr($key, 6) )
                                                             ->where('student_tests_id' , $id)->first();
                    $stdTrueQuestion->update([
                        'score' => 100
                    ]);
                    $numTrue++ ;
                }else {
                   $stdFalseQuestion = StudentQuestion::all()->where('questions_id' , substr($key, 6) )
                                                             ->where('student_tests_id' , $id)->first();
                   $stdFalseQuestion->update([
                        'score' => 0,
                    ]);
                    $numFlase++ ;
                }
            }
        }
        $score += ($numTrue * 100) / count($stdExamQues) ;
        if ( $Test->falseCancleTrue == 1 ) {
           $cancleTrue = $numFlase / 4 ;
           $score -= floor( $cancleTrue) * (100 /  count($stdExamQues) ) ;
        }
        if ($score < 0 )
             $score = 0 ;
        $stdTest->update([
            'true_num' => $numTrue ,
            'fasle_num' => $numFlase ,
            'empty_num' => $numEmpty ,
            'score' =>  $score ,
        ]);
       return redirect()->route('show.exam_Success' , $id);
    }


}
