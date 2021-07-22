<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/user/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Spirit Of <span>Majapahit</span><span><i class="fa fa-leaf"></i></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        @guest
                            <a href="{{ route('welcome') }}" class="nav-link">
                                Home
                            </a>
                        @else
                            <a href="{{ route('home') }}" class="nav-link">
                                Home
                            </a>
                        @endguest
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('wisata') }}" class="nav-link">
                            Wisata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('travel') }}" class="nav-link">
                            Travel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('hotel') }}" class="nav-link">
                            Hotel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('toko') }}" class="nav-link">
                            Oleh - oleh
                        </a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                Login
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- END nav -->
    <div>
        <div class="col-md-4 ml-auto">
            @if ($message = Session::get('status'))
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        </div>
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-5">
                    <div class="row">
                        <div class="col-md-12 col-lg-8 mb-md-0 mb-4">
                            <h2 class="footer-heading"><a href="#" class="logo">Spirit Of<span> Majapahit</span></a>
                            </h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7">
                    <div class="row">
                        <div class="col-md-3 mb-md-0 mb-4 border-left">
                            <h2 class="footer-heading">Contact Us</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-1 d-block">Facebook</a></li>
                                <li><a href="#" class="py-1 d-block">Twitter</a></li>
                                <li><a href="#" class="py-1 d-block">Instagram</a></li>
                                <li><a href="#" class="py-1 d-block">Google</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-8">

                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>
    <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets/user/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/user/js/main.js') }}"></script>
</body>

</html>
