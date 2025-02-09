@extends('en.admin.dashboard')
@section('content')





    <!--  content -->
    <div class="content-wrapper">


        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Add Exam Settings /</span>
                <a href="{{ route('add.exam') }}" class="text-muted fw-light"> Add Exam /</a>
                Exam Informations
            </h4>

            <section>
                <div class="container ">

                    <div class="row card">

                        <div class="col-lg-8">
                            <div class=" mb-4">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Course Name</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0" style="text-transform: capitalize">
                                                {{ $course }}</p>

                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Exam Type</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $test->exam_type }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Exam Effect</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $test->exma_effect }} %</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Exam Day</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $test->exam_day }}</p>
                                        </div>

                                    </div>
                                    <hr>


                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Exam Hour</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $test->exam_hour }}</p>
                                        </div>

                                    </div>
                                    <hr>


                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Exam Duration</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $test->exam_duration }} Minut </p>
                                        </div>

                                    </div>
                                    <hr>


                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Question Number</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $test->ques_number }} </p>
                                        </div>

                                    </div>
                                    <hr>


                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p class="mb-0">Four false cancle out one true</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="text-muted mb-0">{{ $test->falseCancleTrue ? 'True' : 'False' }}</p>
                                        </div>

                                    </div>

                                    <hr><br>

                                    @if ($test->exam_shared == 0)
                                        <div class="row">
                                            <div>

                                                <form style="padding-right : 10px" class="btn btn-danger deactivate-account"
                                                    action="{{ route('del_exam', $test->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <button style="color: #fff; border:none ; background:none">
                                                        Delete Exam
                                                    </button>
                                                </form>
                        
                                                <a href="{{ route('edit.share_exam', $test->id) }}" type="submit"
                                                    style="color: #eee ;margin-bottom: 5px"
                                                    class="btn btn-primary deactivate-account">Share The Exam
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div style="display: block" class="mt-2 col-md-6">
                                            <a type="submit" href="{{ route('show.examResult' , $test->id) }}"
                                                style = " color: #fff ; " class ="btn btn-info me-2 ">Show Result
                                            </a>
                                            <a href="{{ route('edit.cancle_share', $test->id) }}" type="submit"
                                                style="color: #eee ;margin-bottom: 5px"
                                                class="btn btn-primary deactivate-account">Cancle Exam Sharing
                                            </a>

                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
            </section>
        </div>
    </div>




@stop
@section('error')
    <div class="toast-container" style=" position: fixed; top : 110px ; right : 20px">

        {{--  delete success --}}

        @if (Session::has('deletemessage'))
            <div class="bs-toast toast fade show bg-success  screen2" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold">Delete Test</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ Session::get('deletemessage') }}
                </div>
            </div>
        @endif
        {{--  add success --}}

        @if (Session::has('addmessage'))
            <div class="bs-toast toast fade show bg-success  screen2" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-semibold">Add Test</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ Session::get('addmessage') }}
                </div>
            </div>
        @endif
        {{--  any error --}}
        @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div class="bs-toast toast fade show bg-danger  screen2" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="toast-header">
                        <i class="bx bx-bell me-2"></i>
                        <div class="me-auto fw-semibold">Error : (</div>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif

    </div>
@stop
