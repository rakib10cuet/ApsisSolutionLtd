<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles
</head>
<body class="home-page home-01 ">
<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>
<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="mid-section main-info-area">
                    <div class="wrap-logo-top left-section">
                        <a href="/" class="link-to-home"><img src="{{ asset('assets/images/logo/logo-top-1.jpg') }}" alt="mercado"></a>
                    </div>
                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="#" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Search here...">
                                <button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true" style="color: #4a5568"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="wrap-icon right-section">
                        @if(Route::has('login'))
                            @auth
                                @if(Auth::user()->uType == 1)     {{--for Admin--}}
                                    <div class="wrap-icon-section">
                                        <div class="dropdown">
                                            <button class="dropbtn">Admin account ({{ Auth::user()->userName}})</button>
                                            <div class="dropdown-content">
                                                <a title="Dashboard" href="{{route('admin.dashboard')}}">Admin Dashboard</a>
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @elseif(Auth::user()->uType == 2)   {{--Writer--}}
                                    <div class="wrap-icon-section">
                                        <div class="dropdown">
                                            <button class="dropbtn">Writer account ({{ Auth::user() ->userName}})</button>
                                            <div class="dropdown-content">
                                                <a title="Dashboard" href="{{route('writer.dashboard')}}">Writer Dashboard</a>
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @else     {{--for viewer--}}
                                    <div class="wrap-icon-section">
                                        <div class="dropdown">
                                            <button class="dropbtn">Viewer account ({{ Auth::user() ->userName}})</button>
                                            <div class="dropdown-content">
                                                <a title="Dashboard" href="{{route('viewer.dashboard')}}">Viewer Dashboard</a>
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="wrap-icon-section left" >
                                    <button class="dropbtn"><a title="Register or Login" href="{{route('login')}}" style="text-decoration: whitesmoke">Login</a></button>
                                    <button class="dropbtn"><a title="Register or Login" href="{{route('register')}}">Register</a></button>
                                </div>
{{--                                <div class="wrap-icon-section" ><button class="dropbtn"><a title="Register or Login" href="{{route('register')}}">Register</a></button></div>--}}
                            @endif
                        @endif
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-section header-sticky">
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                            <li class="menu-item home-icon">
                                <a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('about')}}" class="link-term mercado-item-title">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{$slot}}

<footer id="footer" style="position: fixed;left: 0;bottom: 0;width: 100%;">
    <div class="coppy-right-box">
        <div class="container">
            <div class="coppy-right-item item-left">
                <img src="{{ asset('assets/images/logo/logo-footer.jpg') }}" alt="mercado">
            </div>
            <div class="coppy-right-item item-right">
                <p class="coppy-right-text" style="text-align: center; margin-top: 5px;">Copyright © Rezwoan Ahmed Rakib. All rights reserved</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
@livewireScripts
</body>
</html>
