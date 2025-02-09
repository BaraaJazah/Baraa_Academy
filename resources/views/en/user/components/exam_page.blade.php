<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="vertical-menu-template-free">

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

    <!-- Layout wrapper -->
    <div style=" height: 100vh ; padding :5vh">


        <div class="card col-md-12 col-lg-10" style="padding: 10px ; margin: auto; ">

            <div class="" style="display: flex ;padding:20px 20px; justify-content: space-between; align-items: center ">
                <span style="" class="text-muted">{{ $Test_day }}</span>


                <span style="" id = "timeDown" class="text-muted">{{ $Test_duration }}</span>

            </div>
        </div>

        <div class=" layout-content-navbar"
            style="margin:auto; width: 100%; height: 80vh ; display: flex ; justify-content: center ;flex-wrap: wrap ">
            <!-- Layout container -->
            <div class="col-md-12 col-lg-6"
                style=" display: flex ; align-self: center ;justify-content: center ; margin:20px 0px">

                <div class="left"
                    style="width:100% ; height: 70vh ; white-space: nowrap;  overflow: hidden;  text-overflow:ellipsis ">

                    @php
                        $j = 0;
                    @endphp

                    <form action="{{ route('student.quesnext', $id) }}" method="POST">
                        @csrf
                        @method('POST')

                        @foreach ($questionDatas as $questionData)
                            <div id="{{ $j++ }}" class="card" style="width : 100% ;  height: 70vh">
                                <div class="nav-align-top ">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs-top-home"
                                                aria-controls="navs-top-home" aria-selected="true">
                                                {{ __('user.Text') }}
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                                                aria-selected="false">
                                                {{ __('user.Image') }}
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div style="height: 220px" class="tab-pane fade active show " id="navs-top-home"
                                            role="tabpanel">
                                            <textarea style="height: 220px" style="resize: none;" class="form-control" id="exampleFormControlTextarea1" readonly
                                                rows="7"> {{ $questionData->question }} </textarea>
                                        </div>
                                        <div style="height: 220px" class="tab-pane fade  " id="navs-top-profile"
                                            role="tabpanel">
                                            <img style="height: 220px" class="card-img-top"
                                                src="  {{ asset('/assets/img/' . $questionData->photo) }}" alt="Card image cap">
                                        </div>
                                    </div>
                                </div>


                                <div class="card-body">
                                    <p dir = "{{ __('user.direct') }}" class="card-text">{{ __('user.answers ') }} </p>
                                    <hr>
                                    <div class="row gy-3">
                                        <div class="col-md">
                                            <div class="form-check">
                                                {{-- input name  --}}
                                                <input class="form-check-input" type="radio"
                                                    name="answer{{ $questionData->id }}"
                                                    value="{{ $questionData->answer_1 }}" id="answer1{{ $questionData->id }}">
                                                <label class="form-check-label" for="answer1{{ $questionData->id }}">
                                                    {{ $questionData->answer_1 }}
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="answer{{ $questionData->id }}"
                                                    value="  {{ $questionData->answer_2 }}" id="answer2{{ $questionData->id }}">
                                                <label class="form-check-label" for="answer2{{ $questionData->id }}">
                                                    {{ $questionData->answer_2 }}
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="answer{{ $questionData->id }}"
                                                    value="{{ $questionData->answer_3 }}" id="answer3{{ $questionData->id }}">
                                                <label class="form-check-label" for="answer3{{ $questionData->id }}">
                                                    {{ $questionData->answer_3 }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="answer{{ $questionData->id }}"
                                                    value="  {{ $questionData->answer_4 }}" id="answer4{{ $questionData->id }}">
                                                <label class="form-check-label" for="answer4{{ $questionData->id }}">
                                                    {{ $questionData->answer_4 }}
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="answer{{ $questionData->id }}"
                                                    value="{{ $questionData->answer_5 }}" id="answer5{{ $questionData->id }}" />
                                                <label class="form-check-label" for="answer5{{ $questionData->id }}">
                                                    {{ $questionData->answer_5 }}
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div style="margin: auto" >{{ $j }} / {{ count($questionDatas) }}</div>
                                <ul class="list-group list-group-flush">
                                    <span style="border-bottom:1px solid #A1ACB8;"></span>
                                </ul>

                                <div class="card-body" style="text-align:right ;">
                                    @php
                                        $m = $j - 2;
                                    @endphp

                                    @if ($m != -1)
                                        <a href="#{{ $m }}"
                                            class="card-link">{{ __('user.Previos ') }}</a>
                                    @endif

                                    @php
                                        $m = $j;

                                    @endphp
                                    @if ($m != count($questionDatas))
                                        <a href="#{{ $m }}" type="submit" id="next1"
                                            class="card-link">
                                            {{ __('user.next') }}
                                        </a>
                                    @else
                                        <button id="autoClickButton" style="border: none ; background:none ; color:#787BFF;"
                                            class="card-link">
                                            {{ __('user.finish ') }}
                                        </button>
                                    @endif

                                    {{-- <button style="border: none ; background:none ; color:#787BFF;"
                                    class="card-link">{{ __('user.next') }}</button> --}}
                                </div>
                            </div>
                        @endforeach
                    </form>

                </div>


            </div>




            <div class=" col-md-12 col-lg-4" style=" display: flex ; padding-left : 30px ; align-self: center">
                <div class="card" style="width : 100% ; height: 70vh">
                    <div class="card-header">
                        <h4 class="card-title">Questions</h4>
                    </div>
                    <div class="card-body" style="overflow: auto; white-space: nowrap;">
                        <div class="row fontawesome-icons" style="flex-wrap: wrap ; ">

                            @php $i = 0 @endphp

                            @foreach ($questionDatas as $questionData)
                                <a href ="#{{ $i }}" id=""
                                    style="  border-radius: 15px ; color:#5B697E ; width:90px ;  flex-wrap: wrap ;   margin : 8px"
                                    class=" link_icon col-md-12">
                                    <dl class="dt w-50 ma0 pa0" style="margin: auto ; margin-top :20px ;    ">
                                        <dt class="the-icon">
                                            <svg style="" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="ad" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">

                                                <path fill="currentColor"
                                                    d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"
                                                    style="--darkreader-inline-fill: currentColor;"
                                                    data-darkreader-inline-fill="">
                                                </path>


                                            </svg><!-- <span class="fa-fw select-all fas"></span> Font Awesome fontawesome.com -->
                                        </dt>
                                        <dd style=" text-align: center ; margin-top : 15px ">{{ ++$i }}</dd>
                                    </dl>
                                    <!---->
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>



        </div>



        <script>

            // timeDown
            let countdown = document.getElementById('timeDown').innerHTML  ;
            let countdownValue = parseInt(countdown)  ;


            // Function to format time as HH:MM:SS
            function formatTime(seconds) {
                const h = Math.floor(seconds / 3600).toString().padStart(2, '0');
                const m = Math.floor((seconds % 3600) / 60).toString().padStart(2, '0');
                const s = (seconds % 60).toString().padStart(2, '0');
                return `${h}:${m}:${s}`;
            }

            // Function to update the countdown display
            function updateCountdown() {
                const countdownElement = document.getElementById('timeDown');
                countdownElement.textContent = formatTime(countdownValue);

                // Check if the countdown has reached zero
                if (countdownValue === 0) {

                    // Click the button automatically
                    document.getElementById('autoClickButton').click();

                } else {
                    // Decrease the countdown value by 1 every second
                    countdownValue--;
                    setTimeout(updateCountdown, 1000);
                }
            }

            // Start the countdown
            updateCountdown();

        </script>
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
