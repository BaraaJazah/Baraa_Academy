<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Question ;
use App\Models\StudentCourse;
use App\Models\StudentTest;
use App\Models\Test;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{
    public function go_to_account_details() : View
    {
        if(view()->exists('en.admin.components.account')){
            return view('en.admin.components.account');
        }else{
            return view('error');
        }
    }



    public function go_to_update_account() : View
    {
        if(view()->exists('en.admin.components.update')){
            return view('en.admin.components.update');
        }else{
            return view('error');
        }
    }
    public function go_to_dashboard() : View
    {
        if(view()->exists('en.admin.components.welcome')){
            return view('en.admin.components.welcome');
        }else{
            return view('error');
        }
    }

    public function go_to_dashboardSuper() : View
    {
        if(view()->exists('en.superAdmin.components.welcome')){
            return view('en.superAdmin.components.welcome');
        }else{
            return view('error');
        }
    }



    public function go_to_tests() : View
    {
        if(view()->exists('en.admin.components.tests')){
            return view('en.admin.components.tests');
        }else{
            return view('error');
        }
    }




    public function go_to_exaInfo($id)
    {
        if(view()->exists('en.admin.components.exam_info')){

            $test = Test::find($id);
            $course = Course::all()->where("id" , $test->course_id)->first()->name;

            return view('en.admin.components.exam_info' , compact('test', 'course'));
        }else{
            return view('error');
        }
    }



//  add and edit route

    public function add_course()
    {
        $courses = Course::all()->where("admin_id" , Auth::user()->id);
        if(view()->exists('en.admin.components.add_course')){
            return view('en.admin.components.add_course', compact('courses'));
        }else{
            return view('error');
        }
    }
    public function add_test() : View
    {
        $courses = Course::all()->where('share' , 0)->where("admin_id" , Auth::user()->id);
        if(view()->exists('en.admin.components.add_test')){
            return view('en.admin.components.add_test' , compact('courses'));
        }else{
            return view('error');
        }
    }

    public function add_question() : View
    {
        $courses = Course::all()->where('share' , 0)->where("admin_id" , Auth::user()->id);
        $tests = Test::all();
        if(view()->exists('en.admin.components.add_question')){
            return view('en.admin.components.add_question', compact( 'courses'));
        }else{
            return view('error');
        }
    }
    public function edit_question() : View
    {
        $courses = Course::all()->where('share' , 0)->where("admin_id" , Auth::user()->id);
        $tests = Test::all();
        if(view()->exists('en.admin.components.edit_question')){
            return view('en.admin.components.edit_question' , compact('courses' , 'tests'));
        }else{
            return view('error');
        }
    }

    public function update_question($id) : View
    {
        if (Question::find($id)){

            $question = Question::find($id);
            $tests = Test::all();
            $courses = Course::all();


            if(view()->exists('en.admin.components.update_question')){
                return view('en.admin.components.update_question' , compact('question', 'tests', 'courses'));
            }else{
                return view('error');
            }
        }else{
            return view('error');
        }
    }



    public function admin_request()
    {
        $users = User::all()->where('admin' , 3);
        if(view()->exists('en.admin.components.admin_request')){
            return view('en.admin.components.admin_request' , compact('users'));
        }else{
            return view('error');
        }
    }


    public function student_data() : View
    {
        $users = DB::table('users')->where('admin' , 0)->orderBy('class')->get();

        if(view()->exists('en.superAdmin.components.student_data')){
            return view('en.superAdmin.components.student_data' , compact('users'));
        }else{
            return view('error');
        }
    }

    public function teacher_data() : View
    {
        $users = DB::table('users')->where('admin' , 1)->orderBy('class')->get();

        if(view()->exists('en.superAdmin.components.teacher_data')){
            return view('en.superAdmin.components.teacher_data' , compact('users'));
        }else{
            return view('error');
        }
    }



    public function change_password() : View
    {
        if(view()->exists('en.admin.components.changePass')){
            return view('en.admin.components.changePass');
        }else{
            return view('error');
        }
    }

    public function add_std() : View
    {
        if(view()->exists('en.superAdmin.components.add_std')){
            return view('en.superAdmin.components.add_std');
        }else{
            return view('error');
        }
    }


    public function add_teacher() : View
    {
        if(view()->exists('en.superAdmin.components.add_teacher')){
            return view('en.superAdmin.components.add_teacher');
        }else{
            return view('error');
        }
    }





    //

    public function  admin_accept($id)
    {

        $user = User::find($id);
        $user->update([
            'admin' => 1 ,
        ]);
        return redirect()->back();
    }


    public function admin_delete($id)
    {
        $user = User::find($id);
        $user->update([
            'admin' => 0 ,
        ]);
        return redirect()->back();
    }

    public function share()
    {
        $courses = Course::all()->where("admin_id" , Auth::user()->id );
        if(view()->exists('en.admin.components.shareCourse')){
            return view('en.admin.components.shareCourse' , compact('courses'));
        }else{
            return view('error');
        }
    }

    public function more_data($id)
    {
        $user = User::find($id);
        $stdCourses = $user->StudentCourse ;
        $userScore = 0;
        foreach($stdCourses as $stdCourse){
            $score = 0 ;
            $stdTests = $stdCourse->StudentTest;
            foreach($stdTests as $stdTest){
                if ($stdTest->exam_submit == 0){
                    $score += $stdTest->score ;
                }
            }
            $stdCourse->update([
                'score' => $score,
            ]);
            $userScore +=  $score;
        }

        $user->update([
            'score' => $userScore,
        ]);

        $courses = Course::all();
        if(view()->exists('en.superAdmin.components.more_data')){
            return view('en.superAdmin.components.more_data' , compact('stdCourses' , 'user', 'courses'));
        }else{
            return view('error');
        }
    }






    public function add_Exam()
    {

        $courses = Course::all()->where("admin_id" , Auth::user()->id );

        if(view()->exists('en.admin.components.add_Exam')){
            return view('en.admin.components.add_Exam' , compact("courses") );
        }else{
            return view('error');
        }
    }
    public function add_ExamQues() : View
    {

        $courses = Course::all()->where("admin_id" , Auth::user()->id );
        $tests = Test::all();

        if(view()->exists('en.admin.components.add_ExamQues')){
            return view('en.admin.components.add_ExamQues' , compact("courses" , "tests" ) );
        }else{
            return view('error');
        }
    }
    public function edit_ExamQues() : View
    {
        $courses = Course::all()->where("admin_id" , Auth::user()->id );


        if(view()->exists('en.admin.components.edit_ExamQues')){
            return view('en.admin.components.edit_ExamQues' , compact("courses"  ) );
        }else{
            return view('error');
        }
    }


    public function update_examQues($id) : View
    {
        if (Question::find($id)){

            $question = Question::find($id);
            $tests = Test::all();
            $courses = Course::all()->where("admin_id" , Auth::user()->id );


            if(view()->exists('en.admin.components.update_examQues')){
                return view('en.admin.components.update_examQues' , compact('question', 'tests', 'courses'));
            }else{
                return view('error');
            }
        }else{
            return view('error');
        }
    }


    public function show_examResult($id)
    {

        $test = Test::find($id);
        $stdExams = StudentTest::where('tests_id' , $id)->orderBy('score', 'desc')->get();
        $stdCourses = StudentCourse::all();
        $users = User::all();


        if(view()->exists('en.admin.components.ExamResult')){
            return view('en.admin.components.ExamResult' , compact('stdExams' , 'stdCourses' , 'users' , 'test') );
        }else{
            return view('error');
        }
    }


    public function share_exam_with_std($id)
    {

        $tests = Test::find($id);

        $tests->update([
            'exam_shared' => 2 ,
        ]) ;

        return redirect()->back()->with('addmessage' , 'The Results Have Been Shared Successfully : )');
    }

    public function unshare_exam_with_std($id)
    {

        $tests = Test::find($id);

        $tests->update([
            'exam_shared' => 1 ,
        ]) ;

        return redirect()->back()->with('addmessage' , 'The Results Have Been Unshared Successfully : )');

    }


    public function download_pdf($id)
    {
        $test = Test::find($id);
        $stdExams = StudentTest::where('tests_id' , $id)->orderBy('score', 'desc')->get();
        $stdCourses = StudentCourse::all();
        $users = User::all();
        $courseName = Course::find($test->course_id)->name ;

        $pdf = PDF::loadView('en.admin.components.myPDF', compact('stdExams' , 'stdCourses' , 'users' , 'test','courseName') )
                    ->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download($courseName.'.pdf');

    }

}
