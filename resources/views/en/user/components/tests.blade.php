@extends('en.user.dashboard')
@section('content')


    <!--  content -->
    <div class="content-wrapper" dir="{{ __('user.direct') }}">
        <div class="container-xxl flex-grow-1 container-p-y" style="padding-top :0rem">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> {{ __('user.tests') }}</h4>
            <div class = "">
                <div class="d-flex flex-wrap" id="icons-container">

                    @foreach ($studentTests as $studentTest)
                        @php
                            $testData = $testsData->where('id', $studentTest->tests_id)->first();
                        @endphp

                        @if ($studentTest->key == 0 && $testData->is_Exam == 0  )
                            <a href="#" style="color:#697A8D;"
                                class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body" style="width: 150px;">
                                    <i style="font-size: 32px;" class='bx bx-lock-alt mb-2'></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">{{ $testData->name }} </p>

                                </div>
                            </a>
                        @elseif ($studentTest->key == 1 && $testData->is_Exam == 0)
                            <a href="{{ route('student.quiz', $studentTest->id) }}" style="color:#697A8D;"
                                class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body" style="width: 150px;">
                                    <i style="font-size: 32px;" class='bx bx-book-add mb-2'></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">{{ $testData->name }}</p>
                                </div>
                            </a>
                        @elseif ($studentTest->key == 2 && $testData->is_Exam == 0 )
                            <a href="#" style="color:#697A8D;"
                                class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body" style="width: 160px;">
                                    <i style="font-size: 32px;" class='bx bx-task mb-2'></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">{{ $testData->name }}</p>
                                    <p class="icon-name text-capitalize text-truncate mb-0">
                                        <span style="color: green;">{{ __('user.score') }} : {{ $studentTest->score }}
                                            %</span>
                                    </p>
                                </div>
                            </a>
                        @endif
                    @endforeach
                    <!-- test button -->
                </div>
            </div>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="text-align: center ; list-style: none;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    </div>




    <div class="content-wrapper" style="padding: 0px ; margin:0px ; ">
        <div class=" container-xxl flex-grow-1 container-p-y" style="margin-top :1rem ; margin-bottom : 0 ">
            <h4 class="fw-bold  "><span class="text-muted fw-light"></span> Exams </h4>

            <div class="card-body">
                <div class="table-responsive">

                    {{--  Start loop  --}}

                    @foreach ($studentTests as $studentTest)
                    @php
                        $testData = $testsData->where('id', $studentTest->tests_id)->first();
                    @endphp

                    @if (($testData->exam_shared == 1 || $testData->exam_shared == 2  ) && $testData->is_Exam == 1  )

                    <table class="table table-lg "
                        style=" background-color: #fff ; border-radius: 16px ;margin-bottom : 30px ">

                        <tbody>

                            <tr style="border : #fff ; border-radius: 16px ;">
                                <td class="col-5">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row" style=" align-items: center">
                                            <div class="col-md-2">
                                                <div class="stats-icon red " style="width:40px ; height: 40px;">
                                                    <a href="{{ route('student.exam' , $studentTest->id )}}">
                                                        <svg class="svg-inline--fa fa-chevron-circle-right fa-w-16 fa-fw select-all"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="chevron-circle-right" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-10" style="justify-items: flex-start ">
                                                <h6 class="text-muted font-semibold" style="text-transform: capitalize" >{{ $testData->exam_type }} &nbsp; ( {{ $testData->exma_effect  }} % )</h6>
                                                <h6 class="font-extrabold mb-2">{{ $testData->exam_day }} &nbsp;&nbsp; {{ $testData->exam_hour }}
                                                    &nbsp;&nbsp; {{ $testData->exam_duration }} minute</h6>
                                                    <div>
                                                        <p>Puan : <span> {{ $testData->exam_shared == 2 ? $studentTest->score : '----'  }} </span> </p>
                                                    </div>


                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-auto">
                                </td>
                            </tr>

                        </tbody>

                    </table>
                    @endif

                    @endforeach


                </div>
            </div>

        </div>
    </div>


@stop


@section('error')
<div class="toast-container" style=" position: fixed; top : 110px ; right : 20px">

    {{--  add success --}}

    @if (Session::has('addmessage'))
        <div class="bs-toast toast fade show bg-danger  screen2" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-semibold">Exam</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ Session::get('addmessage') }}
            </div>
        </div>
    @endif
    {{--  any error --}}

</div>
@stop
