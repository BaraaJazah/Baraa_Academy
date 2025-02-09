    <?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/login', [ApiController::class,'login'])->name('login');






Route::middleware( 'auth:sanctum' )->group(function(){


    Route::get('/userData/{id}', [ApiController::class,'userData'])->name('userData');
    Route::get('/getCourses/{id}', [ApiController::class,'getCourses'])->name('getCourses');

    // For Exam
    Route::get('/getExams/{id}', [ApiController::class,'getExams'])->name('getExams');
    Route::get('/getExamQues/{id}', [ApiController::class,'getExamQues'])->name('getExamQues');
    Route::post('/finishExam/{id}', [ApiController::class,'finishExam'])->name('finishExam');

    // For Test

    Route::get('/getTests/{id}', [ApiController::class,'getTests'])->name('getTests');

    Route::get('/getTestQues/{id}', [ApiController::class,'getTestQues'])->name('getTestQues');
    Route::post('/finishTest/{id}', [ApiController::class,'finishTest'])->name('finishTest');

});




