<header class="header header-layout2">
    <div class="header-topbar header-topbar-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                            @isset($_siteSetting->email)
                            <li>
                                <i class="icon-mail"></i>
                                <a href="mailto:{{ $_siteSetting->email }}">Email: {{ $_siteSetting->email }}</a>
                            </li>
                            @endisset
                            <li>
                                <i class="icon-clock"></i>
                                <a href="contact-us.html">P.tesi - C.tesi: 8:00 - 18:00 </a>
                            </li>
                            {{--<li>
                                <i class="icon-location color-primary"></i>
                                <a href="#" class="color-primary">Get Directions</a>
                            </li>--}}
                        </ul><!-- /.contact__list -->
                        <div class="d-flex align-items-center">
                            <ul class="social-icons list-unstyled mb-0 mr-20">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->
                        </div>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ isset($_siteSetting->logo) ? $_siteSetting->logo : '' }}" class="logo" alt="{{ isset($_siteSetting->title) ? $_siteSetting->title : '' }}">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__item ">
                        <a href="{{ route('home') }}" class="nav__item-link active">Anasayfa</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{ route('about') }}" class="nav__item-link">Hakkımızda</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{ route('projects') }}" class="nav__item-link">Projelerimiz</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{ route('services') }}" class="nav__item-link">Hizmetlerimiz</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item">
                        <a href="{{ route('contact') }}" class="nav__item-link">İletişim</a>
                    </li><!-- /.nav-item -->
                </ul><!-- /.navbar-nav -->
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li>
                    <a href="{{ route('contact') }}" class="btn btn__primary">
                        <span>İletişime Geç</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </li>
            </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header><!-- /.Header -->
