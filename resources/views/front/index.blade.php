@extends('front.layouts.app')
@section('title', ' - Anasayfa')
@section('meta_desciption', !is_null($_siteSetting->meta_description ? $_siteSetting->meta_description : '' ) )
@section('meta_keywords', !is_null($_siteSetting->meta_keywords ? $_siteSetting->meta_keywords : '' ) )
@section('content')
    @if($sliders->count() > 0)
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
    @endif
    @if($services->count() > 0)
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
                            <a class="text-inherit" href="{{ route('service.detail', ['slug' => $service->slug]) }}">{{ $service->title }}</a>
                        </h3>
                        <p class="service-text">{{ $service->short_description }}</p>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
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
    @if($projects->count() > 0)
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
    @endif

    @if($clients->count() > 0)
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
                                    <img src="{{ asset($client->image) }}" alt="{{ $client->name }}" style="width: 122px; height: 78px;">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection
