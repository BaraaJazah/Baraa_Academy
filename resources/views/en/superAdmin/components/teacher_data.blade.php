@extends('en.superAdmin.dashboard')
@section('content')

 <!--  content -->
 <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Student Data</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user )
                      <tr>
                        <td>
                            <img src="{{asset('/assets/img/'.$user->path)}}" style="width: 50px ; height:50px"  alt="rounded-circle avatar"
                            class="rounded-circle img-fluid" style="width: 100px;">
                        </td>
                        <td style="text-transform: capitalize">{{$user->name}} {{$user->surname}}</td>

                        <td>{{$user->email}}</td>
                        <td>
                          <div class="demo-inline-spacing" style="text-align: center;">
                            <a href="{{ route('destroy.ms', $user->id) }}" type="submit"
                                class="btn btn-danger deactivate-account" style="margin-bottom: 5px">Delete Account
                             </a>
                          </div>
                        </td>
                      </tr>
                      @endforeach


                    </tbody>
                  </table>
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
                <form action="{{ route('destroyTeacherFromAdmin', Session::get('deleteId')) }}" method="POST">
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



