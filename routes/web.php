<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\StudentTestController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Models\Question;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard',  [Controller::class, 'dashboard'])->middleware(['auth', 'verified'])->name('welcome');

Route::get('/lang/{locale}' , function(string $locale){
    if (! in_array($locale, ['en', 'ar', 'tr'])) {
        return view('error');
    }
    session()->put('locale' , $locale);
    return redirect()->back();
})->name('lang');


Route::middleware('auth')->group(function () {

    // admin passing page

    Route::controller(AdminController::class)->group(function(){
        Route::get('/en/dashboardSuper', 'go_to_dashboardSuper')->name("dashboard.super");
        Route::get('/en/addstd',   'add_std')->name('add.std');
        Route::get('/en/addteacher',  'add_teacher')->name('add.teacher');
        Route::get('/en/std_data',   'student_data')->name('student_data');
        Route::get('/en/teacher_data', 'teacher_data')->name('teacher_data');
       Route::get('/en/moreData/{id}',  'more_data')->name('moreData');


    });

    Route::controller(AccountController::class)->group(function(){
        Route::post('/register', 'store')->name("register3");
        Route::post('/register4', 'storeTeacher')->name("register4");
        Route::delete('/en/destroyFromAdmin/{id}',   'destroyFromAdmin')->name('destroyFromAdmin');
        Route::delete('/en/destroyTeacherFromAdmin/{id}', 'destroyTeacherFromAdmin')->name('destroyTeacherFromAdmin');
    });


    // Teacher passing page

    Route::controller(AdminController::class)->group(function(){
        Route::get('/en/account_details','go_to_account_details')->name('account.details');
        Route::get('/en/update_account', 'go_to_update_account')->name('account.update');
        Route::get('/en/dashboard',      'go_to_dashboard')->name("dashboard");
        Route::get('/en/tests',          'go_to_tests')->name('tests');
        Route::get('/en/addcourse',      'add_course')->name('add.course');
        Route::get('/en/addtest',        'add_test')->name('add.test');
        Route::get('/en/addquestion',    'add_question')->name('add.question');
        Route::get('/en/editquestion',   'edit_question')->name('edit.question');
        Route::get('/en/updateQues/{id}','update_question')->name('update.question');
        Route::get('/en/requests',       'admin_request')->name('admin_request');
        Route::get('/en/changePass',     'change_password')->name('change_password');
        Route::get('/en/addExam',        'add_Exam')->name('add.exam');
        Route::get('/en/addExamQues',    'add_ExamQues')->name('add.ExamQues');
        Route::get('/en/editExamQues',   'edit_ExamQues')->name('edit.ExamQues');
        Route::get('/en/updateExamQues/{id}','update_examQues')->name('update.examQues');
        Route::get('/en/examInfo/{id}',      'go_to_exaInfo')->name('show.exam_info');
        Route::get('/en/examResult/{id}',    'show_examResult')->name('show.examResult');
        Route::get('/en/shareExamWithStd/{id}',  'share_exam_with_std')->name('edit.shareExamWithStd');
        Route::get('/en/unshareExamWithStd/{id}', 'unshare_exam_with_std')->name('edit.unshareExamWithStd');
        Route::get('/en/downloadPdf/{id}',   'download_pdf')->name('show.download_pdf');
        Route::get('/en/share', 'share')->name('share.course');

    });
        Route::post  ('/en/addCourse'     , [CourseController::class, 'insert'])->name('add_course');
        Route::delete('/en/delCourse/{id}', [CourseController::class, 'delete'])->name('del_course');
        Route::get('/en/shareCourse/{id}',     [CourseController::class, 'share_course'])->name('course.share');
        Route::get('/en/deleteCourse/{id}',    [CourseController::class, 'delete_course'])->name('course.delete');
        Route::get('/en/sharecourse/{id}',     [CourseController::class, 'share_course_message'])->name('course.share.ms');
        Route::get('/en/deletecourse/{id}',    [CourseController::class, 'delete_course_message'])->name('course.delete.ms');

        Route::post  ('/en/addTest'     , [TestController::class, 'insert'])->name('add_test');
        Route::post  ('/en/addExam'     , [TestController::class, 'insertExam'])->name('add_exam');
        Route::delete('/en/addTest/{id}', [TestController::class, 'delete'])->name('del_test');
        Route::delete('/en/addExam/{id}', [TestController::class, 'deleteExam'])->name('del_exam');
        Route::get('/en/shareExam/{id}',     [TestController::class, 'share_exam'])->name('edit.share_exam');
        Route::get('/en/cancleSharing/{id}',     [TestController::class, 'cancle_sharing'])->name('edit.cancle_share');

        Route::post  ('/en/addQuestion'        , [QuestionController::class, 'insert'])->name('add_question');
        Route::delete('/en/addQuestion/{id}'   , [QuestionController::class, 'delete'])->name('del_ques');
        Route::post  ('/en/editQuestion/{id}'  , [QuestionController::class, 'update'])->name('edit_question');

        Route::post  ('/en/update/{id}',    [AccountController::class, 'updateAccount'])->name('update_account');
        Route::post  ('/en/chPass/{id}',    [AccountController::class, 'changePassword'])->name('change_pass');
        Route::delete('/en/destroy/{id}',   [AccountController::class, 'destroy'])->name('destroy');





    Route::get   ('/en/destroyms/{id}', [AccountController::class, 'destroyMessgae'])->name('destroy.ms');
    Route::get('/en/addAdmin/{id}',      [AdminController::class, 'admin_accept'])->name('admin.accept');
    Route::get('/en/deleteAdmin/{id}',   [AdminController::class, 'admin_delete'])->name('admin.delete');




    // Student passing page

    Route::controller(UserController::class)->group(function(){

        Route::get('/en/studentScore', 'go_to_student_score')->name('student.score');
        Route::get('/en/studentAccount','go_to_account')->name('student.account');
        Route::get('/en/studentWelcome','go_to_welcome')->name('student.welcome');
        Route::get('/en/studentUpdate', 'go_to_update')->name('student.update');
        Route::get('/en/studentChangePass',  'go_to_changePass')->name('student.changePass');
        Route::get('/en/studentCourses', 'go_to_courses')->name('student.courses');
        Route::get('/en/adminRequest/{id}','admin_request')->name('admin.request');
        Route::get('/en/studentNext', 'go_to_welcome');
        Route::get('/en/studentFinish', 'go_to_welcome');
        Route::get('/en/examFinishError/{id}', 'exam_error')->name('show.exam_error');
        Route::get('/en/examFinishSuccess/{id}','exam_success')->name('show.exam_Success');
    });


  Route::controller(StudentCourseController::class)->group(function(){

      Route::post('/en/addstdcourse/{id}' , 'add_std_course')->name('add.stdCourse');
      Route::delete('/en/deletestdcourse/{id}','delete_std_course')->name('delete.stdCourse');
      Route::delete('/en/deletestdcoursems/{id}','delete_std_course_ms')->name('delete.stdCourse.ms');
      Route::get('/en/studentTests/{id}','go_to_tests')->name('student.tests');
    });



  Route::controller(StudentTestController::class)->group(function(){
      Route::get('/en/studentQuiz/{id}', 'go_to_quiz')->name('student.quiz');
      Route::get('/en/studentExam/{id}','go_to_exam')->name('student.exam');
      Route::post('/en/quesNext/{id}', 'go_to_quesNext')->name('student.quesnext');
      Route::post('/en/studentNext/', 'go_to_next')->name('student.next');
      Route::get('/en/studentPrevios/', 'go_to_previos')->name('student.previos');
      Route::post('/en/studentFinish/{id}','go_to_finish')->name('student.finish');

  });







});

require __DIR__.'/auth.php';
