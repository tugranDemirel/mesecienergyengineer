<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ !is_null($_siteSetting->title) ? $_siteSetting->title : "Meşeci Enerji ve Mühendislik" }} @yield('title')</title>
    <meta name="author" content="Tuğran Demirel">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/fontawesome.min.css') }}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/layerslider.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">

    @yield('css')
</head>

<body>


<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="{{ asset($_siteSetting->logo) }}" alt="{{ !is_null($_siteSetting->title) ? $_siteSetting->title : 'Meseci Enerji ve Mühendislik' }}"></a>
        </div>
        <div class="vs-mobile-menu">
           @include('front.layouts.navbar')
        </div>
    </div>
</div>
<div class="preloader  ">
    <button class="vs-btn preloaderCls">{{ $_siteSetting->title ?? 'Meşeci Enerji ve Mühendislik' }} </button>
    <div class="preloader-inner">
        <img src="{{ asset($_siteSetting->logo) }}" alt="{{ !is_null($_siteSetting->title) ? $_siteSetting->title : 'Meseci Enerji ve Mühendislik' }}">
        <span class="loader"></span>
    </div>
</div>
<div class="sidemenu-wrapper d-none d-lg-block  ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget  ">
            <div class="vs-widget-about">
                <div class="footer-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset($_siteSetting->logo) }}" alt="{{ !is_null($_siteSetting->title) ? $_siteSetting->title : 'Meseci Enerji ve Mühendislik' }}"></a>
                </div>
                <p class="footer-text">Ut tellus dolor, dapibus eget, elementum ifend cursus eleifend, elit. Aenea ifen dn tor wisi Aliquam er at volutpat. Dui ac tui end cursus eleifendrpis.</p>
                <div class="info-social style2">
                    @include('front.layouts.social-media')
                </div>
            </div>
        </div>
    </div>
</div>
<header class="vs-header header-layout1">
    <div class="container">
        <div class="header-top">
            <div class="row justify-content-between align-items-center">
                <div class="col d-none d-lg-block">
                    <p class="header-top-text"><span class="shape"></span>Enerji çözümleri ile yakıt ve faturalarınızı azaltmanıza yardımcı oluyoruz.</p>
                </div>
                <div class="col-auto col-lg-2">
                    <div class="header-social">
                        @include('front.layouts.social-media')
                    </div>
                </div>
                <div class="col-auto">
                    <a href="contact.html" class="header-top-text"><i class="fas fa-map-marker-alt"></i>Bizi Bulun</a>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container position-relative z-index-common">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="vs-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset($_siteSetting->logo) }}" alt="{{ !is_null($_siteSetting->title) ? $_siteSetting->title : 'Meseci Enerji ve Mühendislik' }}"></a>
                        </div>
                    </div>
                    <div class="col text-end text-xl-center">
                        <nav class="main-menu menu-hover1 menu-style1 d-none d-lg-block">
                            @include('front.layouts.navbar')
                        </nav>
                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-infos-wrap">
            <div class="row gx-0">
                @if(!is_null($_siteSetting->phone))
                <div class="col-md-6 col-lg-4 header-info">
                    <div class="vs-media">
                        <div class="media-icon"><img src="{{ asset('assets/front/img/icon/info-1-1.png') }}" alt="info-icon"></div>
                        <div class="media-body">
                            <p class="media-info">İletişim Numarası: <br> <a href="tel:{{ $_siteSetting->phone }}">( {{ $_siteSetting->phone }} )</a></p>
                        </div>
                    </div>
                </div>
                @endif
                @if(!is_null($_siteSetting->address))
                <div class="col-md-6 col-lg-4 header-info  d-none d-md-flex">
                    <div class="vs-media">
                        <div class="media-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <p class="media-info">{{ $_siteSetting->address }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if(!is_null($_siteSetting->email))
                <div class="col-md-6 col-lg-4 header-info d-none d-lg-flex">
                    <div class="vs-media">
                        <div class="media-icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <p class="media-info">Email Adresi: <br> <a href="mailto:{{ $_siteSetting->email }}">{{ $_siteSetting->email }}</a></p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</header>
@yield('content')
@include('front.layouts.footer')
