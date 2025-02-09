<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Tests </title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet" />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="/assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <script src="/assets/vendor/js/helpers.js"></script>
        <script src="/assets/js/config.js"></script>

        <style>
            .link_icon {
                background-color: #eee;
            }

            .link_icon :visited {
                background-color: red;
            }
        </style>


    </head>
<body>


<div class="container">


    <div class="card-body " style=" margin: auto; ">

        <div class="" style=" margin:auto ; text-align: center">

            <p style="font-size: 20px;text-transform: capitalize " id = "timeDown" class="text-muted">{{ $courseName }}</p>
            <p style="font-size: 16px ;text-transform: capitalize " id = "timeDown" class="text-muted">{{ $test->exam_type }} Results</p>

        </div>
    </div>
    <div class="card-body" >
        <table class="table table-striped" style="width: 100%" id="table1">
            <thead class="table table-striped" style="width: 100% ; text-align: center">
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>True</th>
                    <th>False</th>
                    <th>Empty</th>
                    <th>Result  </th>
                </tr>
            </thead>
            <p style="border-top: 1px solid transparent; " ></p>
            <p style="border-top: 1px solid transparent; " ></p>

            <tbody style="width: 100% ; text-align: center  ">


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



    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


</body>
</html>
