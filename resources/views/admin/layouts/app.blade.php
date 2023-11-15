<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Tuğran Demirel">
    <title>@yield('title') - Enersan Solar</title>
    <!-- vendor css -->
    <link href="{{ asset('assets/admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">


    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/slim.css') }}">
    @yield('css')
</head>
<body>
<div class="slim-header">
    <div class="container">
        <div class="slim-header-left">
            <h2 class="slim-logo"><a href="{{ route('admin.home') }}">Enersan Solar<span>.</span></a></h2>


        </div><!-- slim-header-left -->
        <div class="slim-header-right">

            <div class="dropdown dropdown-c">
                <a href="#" class="logged-user" data-toggle="dropdown">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <span>{{ auth()->user()->name }}</span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <nav class="nav">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout').submit();"><i class="icon ion-forward"></i> Çıkış Yap</a>
                        <form id="logout" action="{{ route('logout') }}" method="post">
                            @csrf
                        </form>
                    </nav>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </div><!-- header-right -->
    </div><!-- container -->
</div><!-- slim-header -->

<div class="slim-navbar">
    <div class="container">
       @include('admin.layouts.navbar')
    </div><!-- container -->
</div><!-- slim-navbar -->

<div class="slim-mainpanel">
    <div class="container">
          @yield('content')
    </div><!-- container -->
</div><!-- slim-mainpanel -->

<div class="slim-footer">
    <div class="container">
        <p>Tüm hakları saklıdır. </p>
        <p>Designed by: <a href="tel:+905443380633">Tuğran Demirel</a></p>
    </div><!-- container -->
</div><!-- slim-footer -->

<script src="{{ asset('assets/admin/lib/jquery/js/jquery.js') }}"></script>
<script src="{{ asset('assets/admin/lib/popper.js/js/popper.js') }}"></script>
<script src="{{ asset('assets/admin/lib/bootstrap/js/bootstrap.js') }}"></script>

<script src="{{ asset('assets/admin/js/slim.js') }}"></script>
@yield('js')
</body>
</html>
