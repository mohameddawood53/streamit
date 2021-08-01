<!doctype html>
<html lang="en-US">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streamit</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}" />
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset("css/typography.css")}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}" />
    <!-- Responsive -->
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Header -->
<header id="main-header" style="font-family: Cairo">
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <div class="navbar-toggler-icon" data-toggle="collapse">
                                <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                                <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                            </div>
                        </a>
                        <a class="navbar-brand" href="/"> <img class="img-fluid logo" src="images/logo.png"
                                                                        alt="streamit" /> </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="menu-main-menu-container">
                                <ul id="top-menu" class="navbar-nav ml-auto">
                                    <li class="menu-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="movie-category.html">Movies</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="show-category.html">Tv Shows</a>
                                    </li>
                                    <!-- <li class="menu-item">
                                    <a href="movie-category.html">Blog</a>
                                 </li> -->
                                    <li class="menu-item">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item "><a href="contact.html">Contact</a></li>
                                            <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                            <li class="menu-item"><a href="privacy-policy.html">Privacy-Policy</a></li>
                                            <li class="menu-item"><a href="#">Pricing</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="pricing-plan-1.html">Pricing Plan 1</a></li>
                                                    <li class="menu-item"><a href="pricing-plan-2.html">Pricing Plan 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @auth()
                            <div class="mobile-more-menu">
                                <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                                   data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-more-line"></i>
                                </a>
                                <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="navbar-right position-relative">
                                        <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                            <li>
                                                <a href="#" class="search-toggle">
                                                    <i class="ri-search-line"></i>
                                                </a>
                                                <div class="search-box iq-search-bar">
                                                    <form action="#" class="searchbox">
                                                        <div class="form-group position-relative">
                                                            <input type="text" class="text search-input font-size-12"
                                                                   placeholder="type here to search...">
                                                            <i class="search-link ri-search-line"></i>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="nav-item nav-icon">
                                                <a href="#" class="search-toggle position-relative">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                                         height="22" class="noti-svg">
                                                        <path fill="none" d="M0 0h24v24H0z" />
                                                        <path
                                                            d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                                    </svg>
                                                    <span class="bg-danger dots"></span>
                                                </a>
                                                <div class="iq-sub-dropdown">
                                                    <div class="iq-card shadow-none m-0">
                                                        <div class="iq-card-body">
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3"
                                                                         alt="streamit" />
                                                                    <div class="media-body">
                                                                        <h6 class="mb-0 ">Boop Bitty</h6>
                                                                        <small class="font-size-12"> just now</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3"
                                                                         alt="streamit" />
                                                                    <div class="media-body">
                                                                        <h6 class="mb-0 ">The Last Breath</h6>
                                                                        <small class="font-size-12">15 minutes ago</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#" class="iq-sub-card">
                                                                <div class="media align-items-center">
                                                                    <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3"
                                                                         alt="streamit" />
                                                                    <div class="media-body">
                                                                        <h6 class="mb-0 ">The Hero Camp</h6>
                                                                        <small class="font-size-12">1 hour ago</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                            <li>
                                                <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                                    <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle"
                                                         alt="user">
                                                </a>
                                                <div class="iq-sub-dropdown iq-user-dropdown" {{__("reg.direction")}}>
                                                    <div class="iq-card shadow-none m-0">
                                                        <div class="iq-card-body p-0 pl-3 pr-3">
                                                            <a href="manage-profile.html" class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-file-user-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 {{__("home.mx nav")}} {{__("reg.float")}}">{{__("home.manage profile")}}</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="setting.html" class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-settings-4-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 {{__("home.mx nav")}} {{__("reg.float")}}">{{__("home.settings")}}</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="pricing-plan.html" class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-settings-4-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 {{__("home.mx nav")}} {{__("reg.float")}}">{{__("home.Pricing plan")}}</h6>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="login.html" class="iq-sub-card setting-dropdown">
                                                                <div class="media align-items-center">
                                                                    <div class="right-icon">
                                                                        <i class="ri-logout-circle-line text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <form action="{{route("logout")}}" method="post">
                                                                            @csrf
                                                                            <button class="my-0 {{__("home.mx nav")}} {{__("reg.float")}}" style="background: none; border: none; color: white; cursor: pointer">{{__("home.logout")}}</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            @if(app()->getLocale() == "ar")
                                                                <a href="/lang/en" class="iq-sub-card setting-dropdown">
                                                                    <div class="media align-items-center">
                                                                        <div class="right-icon">
                                                                            <img src="{{asset("images/united-states-of-america.svg")}}" alt="">
                                                                        </div>
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 {{__("home.mx nav")}} {{__("reg.float")}}">EN</h6>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            @elseif(app()->getLocale() == "en")
                                                                <a href="/lang/ar" class="iq-sub-card setting-dropdown">
                                                                    <div class="media align-items-center">
                                                                        <div class="right-icon">
                                                                            <img src="{{asset("images/egypt.svg")}}" alt="">
                                                                        </div>
                                                                        <div class="media-body ml-3">
                                                                            <h6 class="mb-0 {{__("home.mx nav")}} {{__("reg.float")}}">العربية</h6>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-right menu-right">
                                <ul class="d-flex align-items-center list-inline m-0">
                                    <li class="nav-item nav-icon">
                                        <a href="#" class="search-toggle device-search">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <div class="search-box iq-search-bar d-search">
                                            <form action="#" class="searchbox">
                                                <div class="form-group position-relative">
                                                    <input type="text" class="text search-input font-size-12"
                                                           placeholder="type here to search...">
                                                    <i class="search-link ri-search-line"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon">
                                        <a href="#" class="search-toggle" data-toggle="search-toggle">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22"
                                                 class="noti-svg">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                            </svg>
                                            <span class="bg-danger dots"></span>
                                        </a>
                                        <div class="iq-sub-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3"
                                                                 alt="streamit" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">Boot Bitty</h6>
                                                                <small class="font-size-12"> just now</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3"
                                                                 alt="streamit" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">The Last Breath</h6>
                                                                <small class="font-size-12">15 minutes ago</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3"
                                                                 alt="streamit" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">The Hero Camp</h6>
                                                                <small class="font-size-12">1 hour ago</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon {{__("reg.float")}}" {{__("reg.direction")}}>
                                        <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                                           data-toggle="search-toggle">
                                            <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle" alt="user">
                                        </a>
                                        <div class="iq-sub-dropdown iq-user-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body p-0 pl-3 pr-3">
                                                    <a href="manage-profile.html" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-file-user-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="my-0 {{__("home.mx nav")}} {{__("reg.float")}}">{{__("home.manage profile")}}</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="setting.html" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-settings-4-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="my-0 {{__("home.mx nav")}} {{__("reg.float")}}">{{__("home.settings")}}</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="pricing-plan.html" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-settings-4-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="my-0 {{__("home.mx nav")}} {{__("reg.float")}}">{{__("home.Pricing plan")}}</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="login.html" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-logout-circle-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <form action="{{route("logout")}}" method="post">
                                                                    @csrf
                                                                    <button class="my-0 {{__("home.mx nav")}} {{__("reg.float")}}" style="background: none; border: none; color: white; cursor: pointer">{{__("home.logout")}}</button>
                                                                </form>
{{--                                                                <h6 class="my-0 ">Logout</h6>--}}
                                                            </div>
                                                        </div>
                                                    </a>
                                                    @if(app()->getLocale() == "ar")
                                                        <a href="/lang/en" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <img src="{{asset("images/united-states-of-america.svg")}}" width="30px" alt="">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0 {{__("home.mx nav")}} {{__("reg.float")}}">EN</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @elseif(app()->getLocale() == "en")
                                                        <a href="/lang/ar" class="iq-sub-card setting-dropdown">
                                                            <div class="media align-items-center">
                                                                <div class="right-icon">
                                                                    <img src="{{asset("images/egypt.svg")}}" width="30px" alt="">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">العربية</h6>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                        @guest()
                            <div class="mobile-more-menu">
                                <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                                   data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-more-line"></i>
                                </a>
                                <div class="more-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="navbar-right position-relative">
                                        <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                            <li class="nav-item nav-icon">
                                                <a href="/login" class="btn btn-hover iq-button">
                                                    Sign in
                                                </a>
                                                {{--                                        <div class="search-box iq-search-bar d-search">--}}
                                                {{--                                            <form action="#" class="searchbox">--}}
                                                {{--                                                <div class="form-group position-relative">--}}
                                                {{--                                                    <input type="text" class="text search-input font-size-12"--}}
                                                {{--                                                           placeholder="type here to search...">--}}
                                                {{--                                                    <i class="search-link ri-search-line"></i>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </form>--}}
                                                {{--                                        </div>--}}
                                            </li>
                                            <li class="nav-item nav-icon menu-item">
                                                <a href="{{route("register")}}">
                                                    Sign up
                                                    {{--                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22"--}}
                                                    {{--                                                 class="noti-svg">--}}
                                                    {{--                                                <path fill="none" d="M0 0h24v24H0z" />--}}
                                                    {{--                                                <path--}}
                                                    {{--                                                    d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />--}}
                                                    {{--                                            </svg>--}}
                                                    {{--                                            <span class="bg-danger dots"></span>--}}
                                                </a>
                                                {{--                                        <div class="iq-sub-dropdown">--}}
                                                {{--                                            <div class="iq-card shadow-none m-0">--}}
                                                {{--                                                <div class="iq-card-body">--}}
                                                {{--                                                    <a href="#" class="iq-sub-card">--}}
                                                {{--                                                        <div class="media align-items-center">--}}
                                                {{--                                                            <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3"--}}
                                                {{--                                                                 alt="streamit" />--}}
                                                {{--                                                            <div class="media-body">--}}
                                                {{--                                                                <h6 class="mb-0 ">Boot Bitty</h6>--}}
                                                {{--                                                                <small class="font-size-12"> just now</small>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </a>--}}
                                                {{--                                                    <a href="#" class="iq-sub-card">--}}
                                                {{--                                                        <div class="media align-items-center">--}}
                                                {{--                                                            <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3"--}}
                                                {{--                                                                 alt="streamit" />--}}
                                                {{--                                                            <div class="media-body">--}}
                                                {{--                                                                <h6 class="mb-0 ">The Last Breath</h6>--}}
                                                {{--                                                                <small class="font-size-12">15 minutes ago</small>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </a>--}}
                                                {{--                                                    <a href="#" class="iq-sub-card">--}}
                                                {{--                                                        <div class="media align-items-center">--}}
                                                {{--                                                            <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3"--}}
                                                {{--                                                                 alt="streamit" />--}}
                                                {{--                                                            <div class="media-body">--}}
                                                {{--                                                                <h6 class="mb-0 ">The Hero Camp</h6>--}}
                                                {{--                                                                <small class="font-size-12">1 hour ago</small>--}}
                                                {{--                                                            </div>--}}
                                                {{--                                                        </div>--}}
                                                {{--                                                    </a>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </div>--}}
                                                {{--                                        </div>--}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-right menu-right">
                                <ul class="d-flex align-items-center list-inline m-0">
                                    <li class="nav-item nav-icon">
                                        <a href="/login" class="btn btn-hover iq-button">
                                            Sign in
                                        </a>
{{--                                        <div class="search-box iq-search-bar d-search">--}}
{{--                                            <form action="#" class="searchbox">--}}
{{--                                                <div class="form-group position-relative">--}}
{{--                                                    <input type="text" class="text search-input font-size-12"--}}
{{--                                                           placeholder="type here to search...">--}}
{{--                                                    <i class="search-link ri-search-line"></i>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
                                    </li>
                                    <li class="nav-item nav-icon menu-item">
                                        <a href="{{route("register")}}">
                                            Sign up
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22"--}}
{{--                                                 class="noti-svg">--}}
{{--                                                <path fill="none" d="M0 0h24v24H0z" />--}}
{{--                                                <path--}}
{{--                                                    d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />--}}
{{--                                            </svg>--}}
{{--                                            <span class="bg-danger dots"></span>--}}
                                        </a>
{{--                                        <div class="iq-sub-dropdown">--}}
{{--                                            <div class="iq-card shadow-none m-0">--}}
{{--                                                <div class="iq-card-body">--}}
{{--                                                    <a href="#" class="iq-sub-card">--}}
{{--                                                        <div class="media align-items-center">--}}
{{--                                                            <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3"--}}
{{--                                                                 alt="streamit" />--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h6 class="mb-0 ">Boot Bitty</h6>--}}
{{--                                                                <small class="font-size-12"> just now</small>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="#" class="iq-sub-card">--}}
{{--                                                        <div class="media align-items-center">--}}
{{--                                                            <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3"--}}
{{--                                                                 alt="streamit" />--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h6 class="mb-0 ">The Last Breath</h6>--}}
{{--                                                                <small class="font-size-12">15 minutes ago</small>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="#" class="iq-sub-card">--}}
{{--                                                        <div class="media align-items-center">--}}
{{--                                                            <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3"--}}
{{--                                                                 alt="streamit" />--}}
{{--                                                            <div class="media-body">--}}
{{--                                                                <h6 class="mb-0 ">The Hero Camp</h6>--}}
{{--                                                                <small class="font-size-12">1 hour ago</small>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </li>
{{--                                    <li class="nav-item nav-icon">--}}
{{--                                        <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"--}}
{{--                                           data-toggle="search-toggle">--}}
{{--                                            <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle" alt="user">--}}
{{--                                        </a>--}}
{{--                                        <div class="iq-sub-dropdown iq-user-dropdown">--}}
{{--                                            <div class="iq-card shadow-none m-0">--}}
{{--                                                <div class="iq-card-body p-0 pl-3 pr-3">--}}
{{--                                                    <a href="manage-profile.html" class="iq-sub-card setting-dropdown">--}}
{{--                                                        <div class="media align-items-center">--}}
{{--                                                            <div class="right-icon">--}}
{{--                                                                <i class="ri-file-user-line text-primary"></i>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body ml-3">--}}
{{--                                                                <h6 class="my-0 ">Manage Profile</h6>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="setting.html" class="iq-sub-card setting-dropdown">--}}
{{--                                                        <div class="media align-items-center">--}}
{{--                                                            <div class="right-icon">--}}
{{--                                                                <i class="ri-settings-4-line text-primary"></i>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body ml-3">--}}
{{--                                                                <h6 class="my-0 ">Settings</h6>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="pricing-plan.html" class="iq-sub-card setting-dropdown">--}}
{{--                                                        <div class="media align-items-center">--}}
{{--                                                            <div class="right-icon">--}}
{{--                                                                <i class="ri-settings-4-line text-primary"></i>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body ml-3">--}}
{{--                                                                <h6 class="my-0 ">Pricing Plan</h6>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="login.html" class="iq-sub-card setting-dropdown">--}}
{{--                                                        <div class="media align-items-center">--}}
{{--                                                            <div class="right-icon">--}}
{{--                                                                <i class="ri-logout-circle-line text-primary"></i>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="media-body ml-3">--}}
{{--                                                                <h6 class="my-0 ">Logout</h6>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        @endguest
                    </nav>
                    <div class="nav-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield("content")
<footer id="contact" class="footer-one iq-bg-dark">

    <!-- Address -->
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row footer-standard">
                <div class="col-lg-7">
                    <div class="widget text-left">
                        <div class="menu-footer-link-1-container">
                            <ul id="menu-footer-link-1" class="menu p-0">
                                <li id="menu-item-7314" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7314">
                                    <a href="#">Terms Of Use</a>
                                </li>
                                <li id="menu-item-7316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7316">
                                    <a href="../html/privacy-policy.html">Privacy-Policy</a>
                                </li>
                                <li id="menu-item-7118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7118">
                                    <a href="../html/faq.html">FAQ</a>
                                </li>
                                <li id="menu-item-7118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7118">
                                    <a href="../html/watch-video.html">Watch List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget text-left">
                        <div class="textwidget">
                            <p><small>© 2021 STREAMIT. All Rights Reserved. All videos and shows on this platform are trademarks of, and all related images and content are the property of, Streamit Inc. Duplication and copy of this is strictly prohibited. All rights reserved.</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mt-4 mt-lg-0">
                    <h6 class="footer-link-title">
                        Follow Us :
                    </h6>
                    <ul class="info-share">
                        <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa fa-github"></i></a></li>
                    </ul>

                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="widget text-left">
                        <div class="textwidget">
                            <h6 class="footer-link-title">Streamit App</h6>
                            <div class="d-flex align-items-center">
                                <a class="app-image" href="#">
                                    <img src="../html/images/footer/01.jpg" alt="play-store">
                                </a><br>
                                <a class="ml-3 app-image" href="#"><img src="../html/images/footer/02.jpg" alt="app-store"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Address END -->
</footer>

<!-- MainContent End-->
<!-- back-to-top -->
<div id="back-to-top">
    <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
</div>
<!-- back-to-top End -->
<!-- jQuery, Popper JS -->
<script src="{{asset("js/jquery-3.4.1.min.js")}}"></script>
<script src="{{asset("js/popper.min.js")}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<!-- Slick JS -->
<script src="{{asset("js/slick.min.js")}}"></script>
<!-- owl carousel Js -->
<script src="{{asset("js/owl.carousel.min.js")}}"></script>
<!-- select2 Js -->
<script src="{{asset("js/select2.min.js")}}"></script>
<!-- Magnific Popup-->
<script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
<!-- Slick Animation-->
<script src="{{asset("js/slick-animation.min.js")}}"></script>
<!-- Custom JS-->
<script src="{{asset("js/custom.js")}}"></script>
</body>
</html>
