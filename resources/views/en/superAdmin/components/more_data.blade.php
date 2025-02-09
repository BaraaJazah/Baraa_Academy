@extends('en.superAdmin.dashboard')
@section('content')



    <!--  content -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Admin Request</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Full Name</th>
                                <th>Class</th>
                                <th>Email</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('/assets/img/' . $user->path) }}" style="width: 60px ; height:60px"
                                        alt="rounded-circle avatar" class="rounded-circle img-fluid" style="width: 100px;">
                                </td>
                                <td style="text-transform: capitalize">{{ $user->name }} {{ $user->surname }}</td>
                                <td>{{ $user->class }}</td>

                                <td>{{ $user->email }}</td>
                                <td>
                                    {{ $user->score }}
                                </td>
                            </tr>


                        </tbody>
                    </table>

                    <br>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Course NAme</th>
                                <th>Number Of Solved Tests</th>
                                <th>Score</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stdCourses as $stdCourse)
                                @php
                                    $name = $courses->where('id', $stdCourse->courses_id)->first();
                                    $testNumber = 0;
                                    $stdTests = $stdCourse->StudentTest;
                                    foreach ($stdTests as $stdTest) {
                                        if ($stdTest->exam_submit == 0 && $stdTest->score != 0) {
                                            $testNumber += 1;
                                        }
                                    }
                                @endphp
                                <tr>
                                    <td style="text-transform: capitalize">{{ $name->name }}</td>
                                    <td> {{ $testNumber }} </td>
                                    <td> {{ $stdCourse->score }} </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

                <div style="padding: 20px; padding-top : 50px ; ">
                    <a href="{{ route('destroy.ms', $user->id) }}" type="submit"
                        class="btn btn-danger deactivate-account" style="margin-bottom: 5px">Delete Account
                     </a>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@stop

@section('error')
{{-- Delete account --}}
<div class="toast-container" style=" position: fixed; top : 110px ; right : 20px">

    @if (Session::has('deleteId'))
        <div class="bs-toast toast fade show bg-danger  screen2" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-semibold">Delete Account</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <p>Are you sure you want to delete your account ? </p>
                <form action="{{ route('destroyFromAdmin', Session::get('deleteId')) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button style="color: #eee; border:none ; background : none "><i class="bx bx-trash me-1"></i>
                        Delete</button>
                    <a type="button" style="border : none ; background:none ; color: #eee" data-bs-dismiss="toast"
                        aria-label="Close">Cancle</a>
                </form>
            </div>

        </div>
    @endif

</div>

@stop

