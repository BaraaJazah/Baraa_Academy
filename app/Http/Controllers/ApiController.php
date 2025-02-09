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

class ApiController extends Controller
{
    public function login (Request $request){


        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid login credentials' , 'status' => 404] );
        }

        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'Login successful', 'token' => $token, 'user' => $user , 'status' => 200] );

       }
       public function userData ( $id){

        //    $user = Auth::user();
        // $credentials = $request->only('id');

        $user = User::find( $id);

        if ($user){
            return response()->json(['user' => $user , 'status' => 200] );

        }else {
            return response()->json(['message' => 'Invalid login credentials' , 'status' => 404] );

        }
       }


       public function getCourses ($id){

        $courseData = [];

        $user = User::find( $id);
        $stdcourses = $user->StudentCourse;


        foreach($stdcourses as $stdcourse){
            $data = Course::all()->where('id' , $stdcourse->courses_id)->first() ;
            $data = array('courseId' => $data->id , 'courseName' => $data->name , 'stdCourseId' => $stdcourse->id );
            $data = (object)$data;

            array_push($courseData ,$data);
        }


        if ($courseData){
            return response()->json(['courseData' => $courseData , 'status' => 200] );

        }else {
            return response()->json(['message' => 'Invalid login credentials' , 'status' => 404] );

        }
       }

       public function getTests ($id){

        $TestData = [];


        $stdCourse = StudentCourse::find( $id);
        $stdTests = $stdCourse->StudentTest;



        foreach($stdTests as $stdTest){
            $data = Test::all()->where('id' , $stdTest->tests_id)->first() ;
            if($data->is_Exam == 0){

                $data = array(
                    'stdTestId' => $stdTest->id,
                    'score' => $stdTest->score ,
                    'key' => $stdTest->key ,
                    'testName' => $data->name
                );
                $data = (object)$data;
                array_push($TestData ,$data);
            }
        }


        if ($stdCourse){
            return response()->json(['stdTests' => $TestData , 'status' => 200] );

        }else {
            return response()->json(['message' => 'Invalid login credentials' , 'status' => 404] );

        }
       }

       public function getExams($id){

        $TestData = [];


        $stdCourse = StudentCourse::find( $id);
        $stdTests = $stdCourse->StudentTest;



        foreach($stdTests as $stdTest){
            $data = Test::all()->where('id' , $stdTest->tests_id)->first() ;
            if($data->is_Exam == 1 && ($data->exam_shared == 1 || $data->exam_shared == 2  )){

                $data = array(
                    'stdTestId' => $stdTest->id,
                    'score' => $stdTest->score ,
                    'exam_submit'=>$stdTest->exam_submit ,

                    'testId' => $data->id ,
                    'exam_shared' => $data->exam_shared ,
                    'exam_type' => $data->exam_type ,
                    'exma_effect' => $data->exma_effect ,
                    'exam_day' => $data->exam_day ,
                    'exam_hour' => $data->exam_hour ,
                    'exam_duration' => $data->exam_duration ,
                );
                $data = (object)$data;
                array_push($TestData ,$data);
            }
        }


        if ($stdCourse){
            return response()->json(['stdTests' => $TestData , 'status' => 200] );

        }else {
            return response()->json(['message' => 'Invalid login credentials' , 'status' => 404] );

        }
       }


       public function getExamQues($id){


        // $id = 35 ;

        if(StudentTest::find($id)){
            // get data exam in studentTest

            $stdTest = StudentTest::find($id);
            // get data of exam
            $test = Test::find($stdTest->tests_id);
            $Test_day = $test->exam_day;
            // get data of question came from questions model ( that relate with Test )
           $questions = Test::find($stdTest->tests_id)->Questions;


//  start handle time part


            $message = "" ;

            if ($stdTest->exam_submit == 1 ){
                $message = "The Exam Has Been Completed"  ;
                // return redirect()->back()->with('addmessage' , $message);
                return response()->json(['message' =>$message , 'status' => 404] );

            }

            $duration = $test->exam_duration;
            $Test_duration = $duration;



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


// calculte time duration

            $interval = $endDate->diff($currentDatee);


            $hour = $interval->format('%h');
            $minut = $interval->format('%i');
            $second = $interval->format('%s');

            $Test_duration = intval($hour)*3600 + intval($minut)*60 + intval($second) ;

//  end handle time part

            if ($currentDatee > $endDate) {


                $examValible = false ;
                $message = "Exam Time Is Finish At " . $end ;
                 return response()->json(['message' =>$message , 'status' => 404] );




            }elseif($currentDatee < $startDate){


                $examValible = false ;
                $message = "Exam Will Start In " . $start ;
                return response()->json(['message' =>$message , 'status' => 404] );



            }else {


//  start handle Randomly Questions part

/*
**    when student add a course will add all it's tests and exams for student_tests and all questions for student_questions
**    each student will get questions randomly and will set to this question as ( is_exam_ques = 1  )
**    will sent just questions that ( is_exam_ques = 1 )
**
*/

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

                    $setExamQuestions = StudentQuestion::all()->where('student_tests_id'  , $stdTest->id )->where('questions_id',$randQuestion->id )->first();
                    $setExamQuestions->update([
                        'is_exam_ques' => 1,
                    ]);

                    array_push($questionDatas ,$randQuestion);

                }

            }else {

            $examQuestions = StudentQuestion::all()->where('student_tests_id'  , $stdTest->id )->where('is_exam_ques' , 1);

            foreach($examQuestions as $examQuestion) {

                $question = Question::all()->where('id'  , $examQuestion->questions_id )->first();

                array_push($questionDatas , $question );

              }

            }

            if ($questionDatas != "[]"){


                if(view()->exists('en.user.components.exam_page' )){
                    // return view('en.user.components.exam_page' , compact('questionDatas' , 'id' , 'Test_duration','Test_day' ));
                   return response()->json(['message' =>"Success" , 'questionDatas' =>$questionDatas , 'stdTestId' =>$id ,
                   'Test_duration' =>$Test_duration , 'status' => 200] );

                }else{
                    // return view('error');
                    return response()->json(['message' =>"There Is An Error" , 'status' => 404] );

                }

            }else{

                // return Redirect::back()->withErrors("This Exam Don't have Questions");
                   return response()->json(['message' => "There Is An Error" , 'status' => 404] );


            }
        }
        }else{
        // return view('error');
        return response()->json(['message' => "There Is An Error" , 'status' => 404] );
        }

       }


    public function finishExam(Request $requests , $id){




        $requests =  $requests['dataTransfered'];


        // $requests->keys()
        $stdQues = StudentQuestion::All()->where('student_tests_id' , $id);
        $stdTest = StudentTest::find($id);
        $Test  = Test::find($stdTest->tests_id);

        $duration = $Test->exam_duration ;


        // start date
        $startdate = date("Y-m-d h:i:s", strtotime( $Test->exam_day . $Test->exam_hour )  );

        // calculate end time
       $strtTime = new DateTime( $Test->exam_hour );
       $strtTime->add(new DateInterval('PT' . $duration . 'M'));
    //    $strtTime->add(new DateInterval('PT' . 5 . 'S'));

       $endTime = $strtTime->format('H:i:s');


        // end date
       $enddate = date("Y-m-d h:i:s", strtotime( $Test->exam_day . $endTime )  );



        date_default_timezone_set('Europe/Istanbul');
        $currentDate = date("Y-m-d h:i:s") ;


        // $curren = "2024-07-15 12:40:00";
        // $end = "2024-07-15 12:39:00";

        $currentDatee = new DateTime($currentDate);
        $endDate = new DateTime($enddate);

        if ($currentDate > $endDate) {

            // return redirect()->route('show.exam_error' , $id);
        return response()->json(['message' => "Time Is Up" , 'status' => 404] );

        }


        $score = 0;
        $numTrue = 0 ;
        $numFlase = 0;

        $keys = array_keys($requests);




        $stdExamQues = StudentQuestion::All()->where('student_tests_id' , $id)->where('is_exam_ques', 1 );


        $numEmpty = (count($stdExamQues) - ( count($keys) ) )  ;

        foreach ($keys as $key) {

            if ( str_starts_with($key, 'a')  ) {

                $question = Question::find(substr($key, 6));


// error
                // return response()->json(['message' =>  , 'status' => 200] );


                if ( $question->true_answer == $requests[$key] ){

                    $stdTrueQuestion = StudentQuestion::all()->where('questions_id' , substr($key, 6) )->where('student_tests_id' , $id)->first();

                    $stdTrueQuestion->update([
                        'score' => 100
                    ]);
                    $numTrue++ ;


                }else {

                   $stdFalseQuestion = StudentQuestion::all()->where('questions_id' , substr($key, 6) )->where('student_tests_id' , $id)->first();

                   $stdFalseQuestion->update([
                        'score' => 0,
                    ]);
                    $numFlase++ ;
                }
            }
        }


        $score += ($numTrue * 100) / ( $numTrue + $numFlase + $numEmpty  ) ;

        if ( $Test->falseCancleTrue == 1 ) {

           $cancleTrue = $numFlase / 4 ;
           $score -= floor( $cancleTrue) * (100 /  ( $numTrue + $numFlase + $numEmpty  ) ) ;

        }

        if ($score < 0 )
             $score = 0 ;


        $stdTest->update([
            'true_num' => $numTrue ,
            'fasle_num' => $numFlase ,
            'empty_num' => $numEmpty ,
            'exam_submit' => 1 ,
            'score' =>  $score ,

        ]);



    //    return ' true : '. $numTrue . ', false : ' . $numFlase .", Empty : " . $numEmpty ;
    //    return redirect()->route('show.exam_Success' , $id);
       return response()->json(['message' => "Exam Send Successfully" , 'status' => 200] );

    }
    //  Test Part

    public function getTestQues($id)
    {
        if(StudentTest::find($id)){

            $stdTest = StudentTest::find($id);
            $stdQuestions = $stdTest->StudentQuestion ;


            $questionDatas = Test::find($stdTest->tests_id)->Questions;
            $quesCount = count($questionDatas);

            if ($questionDatas != "[]"){

                 return response()->json(['questionDatas' => $questionDatas , 'status' => 200] );

            }else{

            return response()->json(['message' => "This Test Don't have Questions" , 'status' => 404] );

            }
        }else{
            return response()->json(['message' => "There Is An Error" , 'status' => 404] );

        }

    }



    public function finishTest(Request $request , $id )
    {

        $requests =  $request['dataTransfered'];

        $keys = array_keys($requests);

        $stdTest = StudentTest::find($id);
        $stdCourse =  StudentCourse::find( $stdTest->student_courses_id );

        $numberOfQues = count($stdTest->StudentQuestion ) ;

        $trueAnswer = 0 ;
        $score = 0 ;




        foreach ($keys as $key) {

            if ( str_starts_with($key, 'a')  ) {

                $question = Question::find(substr($key, 6 ));
                $stdQuestion = StudentQuestion::all()->where('questions_id' , substr($key, 6 ) )->where('student_tests_id' , $id)->first();


                if ( $question->true_answer == $requests[$key] ){

                    $trueAnswer++ ;
                    $stdQuestion->update([
                        'score' => 100
                    ]);


                }else {


                   $stdQuestion->update([
                        'score' => 0,
                    ]);
                }
            }
        }



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

        $testScore = number_format((float)($score), 1, '.', '') ;

        $user =  User::find( $stdCourse->users_id );
        $allStdCourses = $user->StudentCourse;
        $userScore = 0;

        foreach($allStdCourses as $allStdCourse){
            $score = 0 ;
            $stdTests = $allStdCourse->StudentTest;
            foreach($stdTests as $stdTest){
                if ($stdTest->exam_submit == 0){
                    $score += $stdTest->score ;
                }
            }
            $allStdCourse->update([
                'score' => $score,
            ]);
            $userScore +=  $score;
        }


        $user->update([
            'score' => $userScore,
        ]);



        return response()->json(['message' => "Exam Send Successfully" , 'status' => 200] );


    }else{

        return response()->json(['message' => "Exam Send Successfully" , 'status' => 202] );

    }

    }
}



