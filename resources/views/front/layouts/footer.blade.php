
<footer class="footer-wrapper footer-layout2" data-bg-src="{{ asset('assets/front/img/bg/footer-bg-1-1.jpg') }}" data-overlay="custom1" data-opacity="9">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Hızlı İletişim</h3>
                        <div class="vs-widget-about">
                            @if(!is_null($_siteSetting->address))
                            <p class="footer-address">{{ $_siteSetting->address }}</p>
                            @endif
                            @if(!is_null($_siteSetting->phone))
                            <p class="footer-info"><i class="fal fa-phone-alt"></i><a class="text-inherit" href="tel:{{ $_siteSetting->phone }}">({{ $_siteSetting->phone }} )</a></p>
                            @endif
                            @if(!is_null($_siteSetting->email))
                            <p class="footer-info"><i class="fal fa-envelope"></i><a class="text-inherit" href="mailto:{{ $_siteSetting->email }}">{{ $_siteSetting->email }}</a></p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Yararlı Linkler</h3>
                        <div class="menu-all-pages-container footer-menu">
                            <ul class="menu">
                                @foreach($_services->take(4) as $_service)
                                <li><a href="{{ route('service.detail', ['slug' => $_service->slug]) }}">{{ $_service->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="widget footer-widget">
                        <div class="sidebar-gallery">
                            @foreach($_projects as $_project)
                            <div class="gallery-thumb">
                                <img src="{{ asset($_project->image) }}" alt="{{ $_project->slug }}" class="w-100">
                                <a href="{{ asset($_project->image) }}" class="popup-image gal-btn"><i class="far fa-search-plus"></i></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-middle">
            <div class="row align-items-center gy-3 text-center text-lg-start">
                <div class="col-lg-4">
                    <a href="{{ route('home') }}"><img src="{{ asset($_siteSetting->logo) }}" alt="{{ $_siteSetting->title ?? 'Meşeci Elektrik ve Mühendislik' }}" width="100"></a>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="text-center col-lg-auto">
                    <p class="copyright-text">Tüm Hakları Saklıdır<i class="fal fa-copyright"></i> 2023 <a class="text-white" href="{{ route('home') }}"> {{ $_siteSetting->title ?? 'Meşeci Enerji ve Elektrik' }}</a>. Design by <a class="text-white" href="tel:+905443380633">Tuğran Demirel</a>.</p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="copyright-menu">
                        <ul class="list-unstyled">
{{--                            <li><a href="sitemap.xml">Sitemap</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

<!-- Jquery -->
<script src="{{ asset('assets/front/js/vendor/jquery-3.6.0.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('assets/front/js/slick.min.js') }}"></script>
<!-- <script src="assets/js/app.min.js"></script> -->
<!-- Layerslider -->
<script src="{{ asset('assets/front/js/layerslider.utils.js') }}"></script>
<script src="{{ asset('assets/front/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('assets/front/js/layerslider.kreaturamedia.jquery.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Circle Progress -->
<script src="{{ asset('assets/front/js/circle-progress.min.js') }}"></script>
<!-- Wow.js -->
<script src="{{ asset('assets/front/js/wow.min.js') }}"></script>
<!-- Main Js File -->
<script src="{{ asset('assets/front/js/main.js') }}"></script>
@yield('js')
</body>

</html>
