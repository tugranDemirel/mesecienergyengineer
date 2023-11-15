<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ isset($_siteSetting->title) ? $_siteSetting->title : "Enersan Solar" }} @yield('title')</title>
    <meta name="author" content="Tuğran Demirel">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="robots" content="INDEX,FOLLOW">
{{--    facebook--}}
    <meta property="og:title" content="@yield('facebook_meta_title')">
    <meta property="og:description" content="@yield('facebook_meta_description')">
    <meta property="og:image" content="@yield('facebook_image')">

{{--    Whatsapp--}}

    <meta property="wa:card" content="summary_large_image">
    <meta property="wa:title" content="@yield('whatsapp_meta_title')">
    <meta property="wa:description" content="@yield('whatsapp_meta_description')">
    <meta property="wa:image" content="@yield('whatsapp_image')">
    <meta property="wa:locale" content="tr">
    <meta property="wa:site" content="{{ $_siteSetting->title ?? 'Enersan Solar' }}">
    <meta property="wa:url" content="{{ url()->full() }}">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" href="{{ isset($_siteSetting->favicon) ?  asset($_siteSetting->favicon) : '' }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/front/css/libraries.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">

    @yield('css')
</head>


<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div><!-- /.preloader -->
        @include('front.layouts.header')
        @yield('content')
        @include('front.layouts.footer')
        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
        <div class="search-popup">
            <button class="search-popup__close"><i class="fas fa-times"></i></button>
            <form class="search-popup__form">
                <input type="text" class="search-popup__input" placeholder="Type Words Then Enter">
                <button class="search-popup__btn"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- /. search-popup -->
    </div><!-- /.wrapper -->
</body>

</html>
