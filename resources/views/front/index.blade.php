@extends('front.layouts.app')
@section('title', ' - Anasayfa')
@section('meta_desciption', !is_null($_siteSetting->meta_description ? $_siteSetting->meta_description : '' ) )
@section('meta_keywords', !is_null($_siteSetting->meta_keywords ? $_siteSetting->meta_keywords : '' ) )
@section('content')

    <section class="  ">
        <div class="vs-hero-carousel" data-height="800" data-container="1900" data-slidertype="responsive">
            <!-- Slide 1-->
            @foreach($sliders as $slider)
                <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
                    <img width="1920" height="807" src="{{ asset($slider->bg_image) }}" class="ls-bg" alt="hero-bg">
                    <div
                        style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; left:315px; top:710px; line-height:0px; z-index:200;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="static:forever;">
                        <div class="d-none d-xxl-block">
                            <button class="ls-custom-dot ls-dots1"><span class="ls-dot-number">1.</span><span
                                    class="ls-dot-shape"></span></button>
                            <button class="ls-custom-dot ls-dots1"><span class="ls-dot-number">2.</span><span
                                    class="ls-dot-shape"></span></button>
                            <button class="ls-custom-dot ls-dots1"><span class="ls-dot-number">3.</span><span
                                    class="ls-dot-shape"></span></button>
                        </div>
                    </div>
                    <ls-layer
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:1490px; top:700px; z-index:200;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="static:forever;">
                        <div class="d-none d-xxl-block">
                            <button data-change-slide="prev" class="icon-btn ls-custom-arrow style3"><i
                                    class="fas fa-chevron-left"></i></button>
                            <button data-change-slide="next" class="icon-btn ls-custom-arrow style3"><i
                                    class="fas fa-chevron-right"></i></button>
                        </div>
                    </ls-layer>
                    <ls-layer
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:1710px; top:50%; z-index:200;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="static:forever;">
                        <div>
                            <button data-change-slide="prev" class="icon-btn ls-custom-arrow style3 me-0 d-block mb-2">
                                <i class="fas fa-chevron-left"></i></button>
                            <button data-change-slide="next" class="icon-btn ls-custom-arrow style3"><i
                                    class="fas fa-chevron-right"></i></button>
                        </div>
                    </ls-layer>
                    <img width="691" height="680" src="{{ asset('assets/front/img/hero/hero-shape-1-1.png') }}"
                         class="ls-l ls-img-layer" alt="shape"
                         style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:105px; left:947px;"
                         data-ls="delayin:400; easingin:easeOutQuint; parallax:true; parallaxlevel:3;">
                    <img width="369" height="629" src="{{ asset( $slider->image) }}" class="ls-l ls-img-layer"
                         alt="hero img"
                         style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:130px; left:1121px;"
                         data-ls="delayin:200; easingin:easeOutQuint; parallax:true; parallaxlevel:6;">
                    <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:313px; top:419px; letter-spacing:-0.5px; font-weight:700;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                        {{ $slider->description }}
                    </h1>
                    <div
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:315px; top:570px;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                        data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                        <a href="{{ route('contact') }}" class="vs-btn">İletişime Geç</a></div>
                    <div
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:550px; top:576px;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                        data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                        @if(!is_null($slider->url))
                        <div class="watch-btn d-none d-xxl-block">
                            <a href="{{ $slider->url }}" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                            <a href="{{ $slider->url }}" class="btn-text popup-video">Video İzle</a>
                        </div>
                        @endif
                    </div>
                    <div
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:646px; top:576px;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                        data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                        <div class="watch-btn d-block d-xxl-none">
                            @if(!is_null($slider->url))
                            <a href="{{ $slider->url }}" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                            <a href="{{ $slider->url }}" class="btn-text popup-video">Video İzle</a>
                            @endif
                        </div>
                    </div>

                    <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:451px; letter-spacing:-0.5px; font-weight:700;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                        {{ $slider->description }}
                    </h1>
                    <div
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:588px;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                        data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                        <a href="{{ route('contact') }}" class="vs-btn">İletişime Geç</a></div>
                    <div
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:104px;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                        data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                        <div class="watch-btn">
                            @if(!is_null($slider->url))
                            <a href="{{ $slider->url }}" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                            <a href="{{ $slider->url }}" class="btn-text popup-video">Video İzle</a>
                            @endif
                        </div>
                    </div>
                    <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:84px; letter-spacing:-0.5px; font-weight:700;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                        data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                        {{ $slider->description }}
                    </h1>
                    <div
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:517px;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                        data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint;">
                        <a href="{{ route('contact') }}" class="vs-btn">İletişime Geç</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class=" space">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-9 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="title-area">
                        <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                            <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1"
                                  transform="translate(-926 -1158)"></path>
                        </svg>
                        <span class="sec-subtitle">PROJECTS SUPPLIER AND INSTALLER</span>
                        <h2 class="sec-title h1">Profesyonel Başarılı Yenilenebilir Enerji Depolama Çözümleri</h2>
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-xl-7 mb-40 mb-xl-0 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="img-box6">
                        <div class="img-1"><img src="{{ asset('assets/front/img/about/about-1-1.jpg') }}" alt="about">
                        </div>
                        <div class="img-2"><img src="{{ asset('assets/front/img/about/about-1-2.jpg') }}" alt="about">
                        </div>
                        <div class="img-shape1"></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
                <div class="col-xl-5 align-self-center text-center text-xl-start wow fadeInUp" data-wow-delay="0.5s">
                    <p class="pe-xxl-5 fs-md mb-xxl-4 pb-xl-2 mt-n1">Ut tellus dolor, dapibus eget, elementum vel, ifend
                        cursus eleifend, elit. Aenea ifendn auctor wisi et ur na. Aliquam er at volutpat. Duis ac
                        tuifendrpis. Ut tu ellus dolor, dapibus eget, elementum vel, curifende suseleifend.</p>
                    <h3 class="h4 mb-1">Thomas Marker</h3>
                    <p class="text-title fs-xs mb-4">Director of Manufacturing facilities company</p>
                    <img src="{{ asset('assets/front/img/about/sign.png') }}" alt="sign">
                </div>
            </div>
        </div>
    </section>
    <div class=" space-bottom">
        <div class="container">
            <div class="row gx-80 mb-1 pb-3 text-center text-xl-start justify-content-center justify-content-xl-start">
                <div class="col-md-4 col-lg-3 col-xxl-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-style1">
                        <span class="counter-number h1">130, 540</span>
                        <p class="counter-text">Tonnes CO2 emissions <br> avoided</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xxl-auto wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-style1">
                        <span class="counter-number h1">150,041</span>
                        <p class="counter-text">Domestic households <br> served each year</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xxl-auto wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter-style1">
                        <span class="counter-number h1">2,840</span>
                        <p class="counter-text">Acres of land protected <br> by solar parks</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xl-7 mb-40 mb-lg-0">
                    <div class="img-box1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="img-1">
                            <img src="{{ asset('assets/front/img/about/ab-2-1.png') }}" alt="about">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                               class="play-btn popup-video position-center"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="shape-dotted jump-reverse"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 align-self-center offset-xl-1 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="list-style1">
                        <ul class="list-unstyled">
                            <li>Satisfaction Value For Money Solution</li>
                            <li>Business Accounting Management</li>
                            <li>Inventory Management Tracking System</li>
                            <li>The world as it is heavily dependent</li>
                            <li>Reliability and performance</li>
                        </ul>
                    </div>
                    <a href="about.html" class="vs-btn">Daha Fazlası</a>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="bg-light-1 space">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                    <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1"
                          transform="translate(-926 -1158)"></path>
                </svg>
                <span class="sec-subtitle">SUNDUKLARIMIZ</span>
                <h2 class="sec-title h1">Profesyonel Hizmetler</h2>
            </div>
            <div class="row gx-0 vs-carousel service-slide1 wow fadeInUp" data-wow-delay="0.4s" data-slide-show="4"
                 data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-dots="true"
                 data-center-mode="true" data-ml-center-mode="true" data-xl-center-mode="true"
                 data-lg-center-mode="true" data-md-center-mode="true">
                @foreach($services as  $service)
                <div class="col-xl-3">
                    <div class="service-style1">
                        <div class="service-img"><img src="{{ asset($service->image) }}"
                                                      alt="{{ $service->slug }}"></div>
                        <div class="service-icon"><img src="{{ asset($service->icon) }}" alt="{{ $service->slug }}">
                        </div>
                        <h3 class="service-title h5">
                            <a class="text-inherit" href="service-details.html">{{ $service->title }}</a>
                        </h3>
                        <p class="service-text">{{ $service->short_description }}</p>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--==============================

    Call To Action Area
    ==============================-->
    <section class=" space ">
        <div class="container text-center text-xl-start  wow fadeInUp" data-wow-delay="0.3s">
            <div class="cta-box1">
                <div class="shape-dotted jump-reverse"></div>
                <div class="row">
                    <div class="col-xl-7 col-xxl-8 mb-30 mb-xl-0">
                        <span class="sec-subtitle">GES PROJESİ Mİ YAPTIRMAK İSTİYORSUNUZ?</span>
                        <h2 class="sec-title">Biz Küresel GES Kurucu ve Montajcısıyız</h2>
                        <a href="{{ route('contact') }}" class="vs-btn">İletişime Geçin</a>
                        <p class="cta-number"><img src="{{ asset('assets/front/img/icon/info-1-2.png') }}" alt="about">
                            İletişim Numarası: <a href="tel:{{ $_siteSetting->phone }}" class="text-reset">( {{ $_siteSetting->phone }} )</a></p>
                    </div>
                    <div class="col-xl col-xxl">
                        <div class="cta-img1">
                            <img src="{{ asset('assets/front/img/cta/cta-1-1.png') }}" alt="cta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" space">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                    <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1"
                          transform="translate(-926 -1158)"></path>
                </svg>
                <span class="sec-subtitle">PRICING PLAN FOR YOU</span>
                <h2 class="sec-title h1">Pricing Packages</h2>
            </div>
            <div class="row vs-carousel price-slide1 wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3"
                 data-lg-slide-show="2" data-md-slide-show="2" data-center-mode="true" data-xl-center-mode="true"
                 data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true"
                 data-sm-center-mode="true">
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img"
                                 data-bg-src="{{ asset('assets/front/img/price/price-img-1-1.jpg') }}"
                                 data-overlay></div>
                            <div class="package-icon"><img src="{{ asset('assets/front/img/icon/price-1-1.png') }}"
                                                           alt="price icon"></div>
                            <h3 class="package-name h4">Solar Panel</h3>
                            <p class="package-text">Black Panels + 5.12kWhStorage</p>
                            <p class="package-price h1"><span class="currency">$</span>2,100</p>
                        </div>
                        <div class="package-body">
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-check"></i>25 Years Warranty</li>
                                    <li><i class="far fa-check"></i>Fully scalable system.</li>
                                    <li><i class="far fa-check"></i>Installation</li>
                                    <li><i class="far fa-check"></i>Repair & Replacement</li>
                                    <li><i class="far fa-check"></i>Skilled Support</li>
                                </ul>
                            </div>
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123
                                    456 2228</a></p>
                            <a href="{{ route('contact') }}" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img"
                                 data-bg-src="{{ asset('assets/front/img/price/price-img-1-2.png') }}"
                                 data-overlay></div>
                            <div class="package-icon"><img src="{{ asset('assets/front/img/icon/price-1-2.png') }}"
                                                           alt="price icon"></div>
                            <h3 class="package-name h4">Windmill</h3>
                            <p class="package-text">Black Panels + 5.12kWhStorage</p>
                            <p class="package-price h1"><span class="currency">$</span>2,900</p>
                        </div>
                        <div class="package-body">
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-check"></i>30 Years Warranty</li>
                                    <li><i class="far fa-check"></i>Fully scalable system.</li>
                                    <li><i class="far fa-check"></i>Installation</li>
                                    <li><i class="far fa-check"></i>Repair & Replacement</li>
                                    <li><i class="far fa-check"></i>Skilled Support</li>
                                </ul>
                            </div>
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123
                                    456 2228</a></p>
                            <a href="{{ route('contact') }}" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img"
                                 data-bg-src="{{ asset('assets/front/img/price/price-img-1-3.png') }}"
                                 data-overlay></div>
                            <div class="package-icon"><img src="{{ asset('assets/front/img/icon/price-1-4.png') }}"
                                                           alt="price icon"></div>
                            <h3 class="package-name h4">Global Energy</h3>
                            <p class="package-text">Black Panels + 5.12kWhStorage</p>
                            <p class="package-price h1"><span class="currency">$</span>3,200</p>
                        </div>
                        <div class="package-body">
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-check"></i>35 Years Warranty</li>
                                    <li><i class="far fa-check"></i>Fully scalable system.</li>
                                    <li><i class="far fa-check"></i>Installation</li>
                                    <li><i class="far fa-check"></i>Repair & Replacement</li>
                                    <li><i class="far fa-check"></i>Skilled Support</li>
                                </ul>
                            </div>
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123
                                    456 2228</a></p>
                            <a href="{{ route('contact') }}" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img"
                                 data-bg-src="{{ asset('assets/front/img/price/price-img-1-4.png') }}"
                                 data-overlay></div>
                            <div class="package-icon"><img src="{{ asset('assets/front/img/icon/price-1-3.png') }}"
                                                           alt="price icon"></div>
                            <h3 class="package-name h4">Fossil Service</h3>
                            <p class="package-text">Black Panels + 5.12kWhStorage</p>
                            <p class="package-price h1"><span class="currency">$</span>4,100</p>
                        </div>
                        <div class="package-body">
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-check"></i>50 Years Warranty</li>
                                    <li><i class="far fa-check"></i>Fully scalable system.</li>
                                    <li><i class="far fa-check"></i>Installation</li>
                                    <li><i class="far fa-check"></i>Repair & Replacement</li>
                                    <li><i class="far fa-check"></i>Skilled Support</li>
                                </ul>
                            </div>
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123
                                    456 2228</a></p>
                            <a href="{{ route('contact') }}" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-1 space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">PROJELERİMİZ</span>
                    </div>
                </div>
                <div class="col-auto align-self-center">
                    <div class="sec-btns">
                        <a href="{{ route('projects') }}" class="vs-btn">Bütün Projelerimiz</a>
                    </div>
                </div>
            </div>
            <div class="row project-slide1 vs-carousel gx-45" data-slide-show="3" data-variable-width="true"
                 data-arrows="true">
                @foreach($projects as $project)
                <div class="col-auto">
                    <div class="project-style1 layout2">
                        <div class="project-img"><a href="{{route('project.detail', ['slug' => $project->slug])}}"><img
                                    src="{{ asset($project->image) }}" alt=" {{ $project->image }}"></a>
                        </div>
                        <div class="project-content">
                            <span class="project-category">{{ strtoupper($project->category->name) }}</span>
                            <h3 class="project-title h4"><a href="{{route('project.detail', ['slug' => $project->slug])}}" class="text-inherit"> {{ $project->sub_title }}</a></h3>
                            <span class="project-energytotal h4"> {{ $project->system_size }} <span class="quantity">kWh</span></span>
                            <p class="project-energytext">{{ $project->title }}</p>
                            <div class="shape-dotted"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class=" space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-lg-6 col-xl-5 col-xxl-4 align-self-center mb-40 mb-xl-0 text-center text-xl-start wow fadeInUp"
                    data-wow-delay="0.3s">
                    <span class="sec-subtitle">MÜŞTERİ VE MARKALARIMIZ</span>
                    <h2 class="sec-title mb-n2">Güçlü Yapı, Uzun Süreli İlişki</h2>
                </div>
                <div class="col-xl-7 offset-xxl-1 z-index-common wow fadeInUp" data-wow-delay="0.4s">
                    <div class="brand-wrap1">
                        <div class="shape-dotted jump"></div>
                        <div class="row gx-0">
                            @foreach($clients as $client)
                            <div class="col-md-6 col-lg-4">
                                <div class="brand-style1">
                                    <img src="{{ asset($client->image) }}" alt="{{ $client->name }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
