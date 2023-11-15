
<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-contact">
                    <h6 class="footer-widget-title">Hızlı İletişim</h6>
                    <div class="footer-widget-content">
                        <p class="mb-20">
                            Herhangi bir sorunuz varsa veya yardıma ihtiyacınız varsa ekibimizle iletişime geçmekten çekinmeyin.</p>
                        <div class="contact__number d-flex align-items-center mb-30">
                            <i class="icon-phone"></i>
                            <a href="tel:{{ $_siteSetting->phone ?? '' }}" class="color-primary">{{ $_siteSetting->phone ?? '' }}</a>
                        </div><!-- /.contact__numbr -->
                        <p class="mb-20">{{ $_siteSetting->address ?? '' }}</p>
                        <a href="{{ route('contact') }}" class="btn__location">
                            <i class="icon-location"></i>
                            <span>Yol Tarifi</span>
                        </a>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-3 -->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Şirketimiz</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}">Hakkımızda</a></li>
                                <li><a href="{{ route('contact') }}">İletişim</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                @if($_projects->count() > 0)
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Projelerimiz</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                @foreach($_projects as $_project)
                                    <li><a href="{{ route('project.detail', ['slug' => $_project->slug]) }}">{{ $_project->title }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                @endif
                @if($_services->count() > 0)
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Hizmetlerimiz</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                @foreach($_services as $_service)
                                <li><a href="{{ route('service.detail', ['slug' => $_service->slug]) }}">{{ $_service->title }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-2 -->
                @endif
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-align-right">
                    <div class="footer-widget-content">

                        <ul class="social-icons list-unstyled">
                            <li><a href="{{ $_siteSetting->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $_siteSetting->twitter ?? '#' }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{ $_siteSetting->instagram ?? '#' }}"><i class="fab fa-twitter"></i></a></li>
                        </ul><!-- /.social-icons -->
                    </div><!-- /.footer-widget-content -->
                </div><!-- /.col-xl-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-copyrights">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between">
                    <nav>
                        <ul class="copyright__nav d-flex flex-wrap list-unstyled mb-0">
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </nav>
                    <p class="mb-0">
                        <span class="color-gray">&copy; 2023, Tüm Hakları Saklıdır. Design By</span>
                        <a href="tel:+905443380633">Tuğran Demirel</a>
                    </p>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-copyrights-->
</footer><!-- /.Footer -->
<button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

</div><!-- /.wrapper -->

<script src="{{ asset('assets/front/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/plugins.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>

