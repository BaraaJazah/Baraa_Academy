<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>dashboard</title>
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

    @section('css')
    @show

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="/assets/vendor/js/helpers.js"></script>
    <script src="/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


                <div class="app-brand " style="justify-content: center ; padding: 20px">
                    <!-- logo -->
                    <img style="width: 100px ; height : 100px;" src="/assets/img/logo.png" alt="">
                    <!-- / logo -->
                </div>
                <span class="menu-header-text" style=" margin: auto ;padding-bottom:20px">Baraa Academy </span>

                <span class="menu-header-text" style="border: 1px solid #eee ; width:80% ; margin: auto; "></span>






                <ul class="menu-inner py-4 ps ps--active-y " style=" height :350% ">
                    <!-- Dashboard -->
                    <li class="menu-item ">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-header small text-capitalize">
                        <span class="menu-header-text">Course Data</span>
                    </li>

                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Add Data</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('add.course') }}" class="menu-link">
                                    <div data-i18n="Without menu">Add Course</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('add.test') }}" class="menu-link">
                                    <div data-i18n="Without navbar">Add Test</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('add.question') }}" class="menu-link">
                                    <div data-i18n="Without navbar">Add Question</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('edit.question') }}" class="menu-link">
                                    <div data-i18n="Without navbar">Edit Questions</div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    {{-- <li class="menu-item">
                        <a href="{{ route('admin_request') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Analytics">Admin Request</div>
                        </a>
                    </li> --}}
                    {{-- <li class="menu-item">
                        <a href="{{ route('student_data') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Analytics">All Student Data</div>
                        </a>
                    </li> --}}



                    {{-- <li class="menu-item">
                        <a href="{{ route('add.std') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Analytics">Add Student</div>
                        </a>
                    </li> --}}

                    <li class="menu-item">
                        <a href="#" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Add Exam</div>
                        </a>

                        <ul class="menu-sub">

                            <li class="menu-item">
                                <a href="{{ route('add.exam') }}" class="menu-link">
                                    <div data-i18n="Without menu">Add Exam</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('add.ExamQues') }}" class="menu-link">
                                    <div data-i18n="Without menu">Add Questions</div>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('edit.ExamQues') }}" class="menu-link">
                                    <div data-i18n="Without menu">Edit Questions</div>
                                </a>
                            </li>


                        </ul>
                    </li>


                    <li class="menu-item">
                        <a href="{{ route('share.course') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Analytics">Share Courses</div>
                        </a>
                    </li>

                </ul>

            </aside>
            <!-- / Menu -->


            <!-- Layout container -->
            <div class="layout-page">
                <nav style="height: 90px"
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Courses  -->

                        <!-- /Courses  -->
                        <ul style=" text-align:center ;" class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->

                            <li class="nav-item navbar-dropdown dropdown-user dropdown" style="margin-right:-25px ;">
                                <a class=" nav-link dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <div class="avatar"
                                        style=" margin:auto ; height:45px ; width: 45px ; margin-top :10px">
                                        <img src="{{ asset('/assets/img/' . Auth::user()->path) }}" alt="photo"
                                            class=" rounded-circle" />
                                    </div>

                                </a>
                                <ul class="dropdown-menu dropdown-menu-end " data-bs-popper="none">
                                    <li>
                                        <span class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('/assets/img/' . Auth::user()->path) }}"
                                                            alt="" class="rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"
                                                        style="text-transform: capitalize">{{ Auth::user()->name }}
                                                        {{ Auth::user()->surname }}</span>
                                                    @if (Auth::user()->admin == 2)
                                                        <small class="text-muted">SuperAdmin</small>
                                                    @elseif (Auth::user()->admin == 1)
                                                        <small class="text-muted">Admin</small>
                                                    @endif

                                                </div>
                                            </div>
                                        </span>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('account.details') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <i class="bx bx-power-off me-2"></i>
                                            <button class=" " style="display:inline ; padding : 0px ; border:none ; color :#68798C ;  background-color: transparent ">Log
                                                Out</button>
                                        </form>
                                    </li>
                                </ul>
                                <p
                                    style="white-space: nowrap; margin-top:-5px ;
                      width : 120px ;
                      overflow: hidden;
                      text-overflow:ellipsis;
                      text-transform: capitalize;
                      font-size: 13px;
                      text-align :center;
                      transform: translate(-0px,5px);">
                                    <!-- student name  -->
                                    {{ Auth::user()->name }} {{ Auth::user()->surname }}
                                </p>
                            </li>
                            <!--/ User -->
                        </ul>
                        @section('error')

                        @show
                    </div>

                </nav>

                <!--  content -->

                @section('content')


                @show

                <!--  /content -->

                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a>Beraa Ceze</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- / Layout wrapper -->

    @section('javascript')
    @show
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
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
