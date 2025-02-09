@extends('en.admin.dashboard')


@section('css')



@show

@section('content')



    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y ">

            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add Exam Settings /</span>
                <a href="{{route("show.exam_info" , $test->id)}}" class="text-muted fw-light">Exam Informations /</a>
                Exam Result</h4>

            <div class="card">

                {{--  TODO Donwload Pdf  --}}

                <div class=" card-header" style="display: flex ; justify-content: space-between">

                    <a href="{{ route("show.download_pdf" , $test->id ) }}" style = "background-color :red: " class = " btn btn-info rounded-pill ">
                        Download Pdf
                    </a>

                    @if ($test->exam_shared == 1)

                        <a href="{{ route('edit.shareExamWithStd' , $test->id)   }}"  class = " btn btn-info rounded-pill ">
                            Sharing Results With Students
                        </a>

                    @elseif ($test->exam_shared == 2)

                        <a href="{{ route('edit.unshareExamWithStd' , $test->id)   }}" class = "btn btn-danger rounded-pill ">
                            Cancle Sharing Results With Students
                        </a>

                    @else

                    @endif

                </div>




                <div class="  card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>True</th>
                                <th>False</th>
                                <th>Empty</th>

                                <th>Result  </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ( $stdExams as $stdExam )

                            @php
                                $stdCourse = $stdCourses->where( 'id' , $stdExam->student_courses_id   )->first();
                                $user = $users->where( 'id' , $stdCourse->users_id   )->first();
                                $stdName = $user->name ;
                                $stdSurname = $user->surname ;

                            @endphp
                            <tr>
                                <td style="text-transform: capitalize" >{{ $stdName  }}</td>
                                <td style="text-transform: capitalize" >{{ $stdSurname }}</td>
                                <td>{{$stdExam->true_num }}</td>
                                <td>{{$stdExam->fasle_num}}</td>
                                <td>{{$stdExam->empty_num}}</td>

                                <td>
                                    @if ($stdExam->exam_submit == 0)
                                    <span class="badge bg-danger"> Girmedi </span>

                                    @elseif ( $stdExam->score  >= 50 )

                                    <span class="badge bg-success">{{ $stdExam->score }}</span>

                                    @else
                                    <span class="badge bg-danger">{{ $stdExam->score }}</span>


                                    @endif
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        </section>


    @stop


    @section('error')
    <div class="toast-container" style=" position: fixed; top : 95px ; right : 20px ; ">

        {{--  add success --}}

        @if (Session::has('addmessage'))
            <div class="bs-toast toast fade show bg-success  screen2" role="alert" aria-live="assertive"
                aria-atomic="true" style="width: 400px" >
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold">Share Results</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ Session::get('addmessage') }}
                </div>
            </div>
        @endif

    </div>
@stop
