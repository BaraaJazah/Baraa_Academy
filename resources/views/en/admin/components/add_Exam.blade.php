@extends('en.admin.dashboard')




@section('content')


    <!--  content -->
    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add Exam Settings /</span> Add Exam</h4>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Exam Details</h5>
                        <!-- Account -->

                        <hr class="my-0">
                        <div class="card-body">
                            <form id="formAccountSettings" method="POST" action="{{ route('add_exam') }}">
                                @csrf
                                @method('POST')
                                <div class="row">

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="country">Select Course</label>
                                        <select style="width :49% " id="country" class="select2 form-select"
                                            name="course_id" required>
                                            <option value="">select</option>

                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}" style="text-transform: capitalize ; ">
                                                    {{ $course->name }}</option>
                                            @endforeach



                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="country">Exam Type</label>
                                        <select style=" " id="country" class="select2 form-select" name="exam_type">
                                            <option value="">select</option>
                                            <option value="homework">Homework</option>
                                            <option value="midterm">Midterm</option>
                                            <option value="final">Final</option>

                                        </select>
                                    </div>


                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="country">Exam Effect</label>
                                        <select style=" " id="country" class="select2 form-select"
                                            name="exam_effect">
                                            <option value="">Select</option>
                                            <option value="5">5 %</option>
                                            <option value="10">10 %</option>
                                            <option value="15">15 %</option>
                                            <option value="20">20 %</option>
                                            <option value="25">25 %</option>
                                            <option value="30">30 %</option>
                                            <option value="35">35 %</option>
                                            <option value="40">40 %</option>
                                            <option value="45">45 %</option>
                                            <option value="50">50 %</option>
                                            <option value="55">55 %</option>
                                            <option value="60">60 %</option>
                                            <option value="65">65 %</option>
                                            <option value="70">70 %</option>
                                            <option value="75">75 %</option>
                                            <option value="80">80 %</option>
                                            <option value="85">85 %</option>
                                            <option value="90">90 %</option>
                                            <option value="95">95 %</option>
                                            <option value="100">100 %</option>

                                        </select>
                                    </div>


                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Exam Day</label>
                                        {{-- <input class="form-control" type="text" id="name" name="name" value="" autofocus=""> --}}

                                        <input class="form-control" style=" " type="date" name="exam_day"
                                            value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d', strtotime ('+0 day')) }}" max="{{ date('Y-m-d', strtotime ('+1 year')) }}" />

                                    </div>


                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Exam Start Hour</label>
                                        <input class="select2 form-select" type="time" id="appt" name="exam_hour"
                                            min="08:00" max="24:00" required />
                                    </div>


                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Question Number</label>

                                        <input class="form-control" type="text" id="name" name="ques_number"
                                            value="" autofocus="">

                                    </div>


                                    <div class="mb-3 col-md-6">
                                        <label for="firstName" class="form-label">Exam Duration ( minut )</label>
                                        <input class="form-control" type="text" id="name" name="exam_duration"
                                            value="" autofocus="">
                                    </div>

                                    <div class=" mb-3 col-md-12 " style="padding-top: 30px ; padding-bottom: 30px">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-info"
                                                name="false_cancle_true" value=1>
                                            <label style="padding-left:10px " class="form-check-label"
                                                for="customColorCheck5">Each 4 false answers cancel out 1 true
                                                answer</label>
                                        </div>
                                    </div>


                                    <div class="mt-2 col-md-6">
                                        <button type="submit" class="btn btn-primary me-2">Add Exam</button>
                                        <a href="{{ route('dashboard') }}" type="reset"
                                            class="btn btn-outline-secondary">Cancel</a>
                                    </div>


                            </form>

                        </div>
                        <!-- /Account -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">All Exams</h5>
                <div class="table-responsive text-nowrap">

                    <div class="col-lg-12">
                        <div class="demo-inline-spacing mt-3">
                            <div class="list-group list-group-horizontal-md text-md-center">

                                @foreach ($courses as $course)
                                    {{-- start courses for loop --}}

                                    <a class="list-group-item list-group-item-action" id="home-list-item"
                                        data-bs-toggle="list" href="#coures{{ $course->id }}">{{ $course->name }}</a>
                                @endforeach {{-- end courses for loop --}}

                            </div>


                            <div class="tab-content px-0 mt-0">
                                {{-- start courses for loop --}}

                                @foreach ($courses as $course)
                                    <div class="tab-pane fade" id="coures{{ $course->id }}" >

                                        <table class="table" style="">
                                            <thead>
                                                <tr>
                                                    <th>Exam Type </th>
                                                    <th>Exam Day </th>
                                                    <th>Exam Hour </th>
                                                    <th>Question Number </th>
                                                    <th></th>


                                                </tr>
                                            </thead>
                                            {{-- start test for loop --}}

                                            @foreach ($course->Tests as $test)
                                                @if ($test->is_Exam == 1)
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right: 100px ; text-transform: capitalize ">{{ $test->exam_type }}</td>
                                                            <td style="padding-right: 100px">{{ $test->exam_day }}</td>
                                                            <td style="padding-right: 100px">{{ $test->exam_hour }}</td>
                                                            </td>
                                                            <td style="padding-right: 100px">{{ $test->ques_number }}</td>

                                                            <td>

                                                                <a href="{{ route('show.exam_info', $test->id ) }}" style="color: #686BFF; border:none ; background:none">
                                                                    {{-- <i class="bi bi-file-earmark-medical-fill"  ></i> --}}

                                                                    <svg  style="width: 15px" class="svg-inline--fa fa-file-alt fa-w-12 fa-fw select-all" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z" style="--darkreader-inline-fill: currentColor;" data-darkreader-inline-fill=""></path></svg>
                                                                      &nbsp;&nbsp; More Information
                                                                </a>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                @endif
                                            @endforeach

                                            {{-- end test for loop --}}
                                        </table>
                                    </div>
                                @endforeach {{-- end courses for loop --}}
                            </div>

                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

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
