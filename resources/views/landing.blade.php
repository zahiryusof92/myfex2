<!DOCTYPE html>
<html class="no-js"lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">
        <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- Ico Font CSS -->
        <link rel="stylesheet" href="{{ asset('landing/css/icofont.css') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('landing/css/responsive.css') }}">

    </head>
    <body class="bg-img body-bg">
        <div class="canvas-area">
            <canvas class="constellation"></canvas>
        </div>
        <!-- Preloader Starts -->
        <div class="preloader-wrap">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--/Preloader Ends -->

        <!-- MAIN CONTENT PART START -->
        <div class="bg-img color-white main-container">
            <!-- HEADER PART START-->
            <div id="header" class="style-1">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.png')}}" alt="" style="width: 150px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icofont icofont-navigation-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link nav-menu" href="{{ route('login') }}">LOG MASUK</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link nav-menu" href="{{ route('register') }}">DAFTAR</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- HEADER PART END-->

            <!-- BODY CONTENT PART START -->
            <div id="main-content-about" class="xs-no-positioning fixed fixed-middle">
                <!-- TITLE PART START -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="title text-left">
                                <span class="about-main-title">Selamat Datang ke Portal MyFEX 2.0</span>
                            </div>

                            <div class="content-text">
                                
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center">
                            <div class="about-img-box">
                                <div class="about_img">
                                    <img class="w-100" src="{{ asset('landing/img/about.png')}}" alt="">
                                </div>

                                <div class="top-shape"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- TITLE PART END -->
            </div>
            <!-- BODY CONTENT PART END -->

            <!-- FOOTER PART START-->
            <div id="footer" class="fixed fixed-bottom bg-footer py-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 text-center">
                            <span>&copy; {{date('Y')}} {{ config('app.name', 'Laravel') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER PART END-->

        </div>
        <!-- /MAIN CONTENT PART ENDS -->

        <!-- jQuery -->
        <script src="{{ asset('landing/js/jquery-3.2.1.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
        <!-- zepto JS -->
        <script src="{{ asset('landing/js/zepto.min.js') }}"></script>
        <!-- constellation JS -->
        <script src="{{ asset('landing/js/constellation.min.js') }}"></script>
        <!-- stars JS -->
        <script src="{{ asset('landing/js/stars.js') }}"></script>
        <!-- scripts -->
        <script src="{{ asset('landing/js/scripts.js') }}"></script>
        <script>
            $('.canvas-area canvas').constellation({
                star: {
                    width: 3
                },
                line: {
                    color: 'rgba(255,255,255,0.7)'
                },
                length: (window.innerWidth / 9),
                radius: (window.innerWidth / 5)
            });
        </script>
    </body>
</html>