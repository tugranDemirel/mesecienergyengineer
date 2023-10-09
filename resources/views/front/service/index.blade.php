@extends('front.layouts.app')
@section('title', ' - Hizmetlerimiz')
@section('meta_desciption', !is_null($_siteSetting->meta_description ? $_siteSetting->meta_description : '' ) )
@section('meta_keywords', !is_null($_siteSetting->meta_keywords ? $_siteSetting->meta_keywords : '' ) )
@section('content')

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/front/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Hizmetlerimiz</h1>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu-wrap">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}"><i class="fas fa-home-lg"></i>Anasayfa</a></li>
                <li>Hizmetlerimiz</li>
            </ul>
        </div>
    </div>
    <!--==============================
    Feature Area
    ==============================-->
    @if($services->count() > 0)
    <section class=" space">
        <div class="container">
            <div class="row gx-0">
                @foreach($services as $service)
                <div class="col-md-6 col-lg-4 feature-style2">
                    <div class="feature-body">
                        <div class="feature-icon"><img src="{{ asset($service->icon) }}" alt="icon"></div>
                        <h3 class="feature-title h5"><a href="{{ route('service.detail', ['slug' => $service->slug]) }}" class="text-inherit">{{ $service->title }}</a></h3>
                        <p class="feature-text">{{ $service->short_description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <!--==============================
    Project Area
    ==============================-->
    @if($projects->count() > 0)
    <section class="bg-light-1 space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Çalışmalarımız </span>
                        <h2 class="sec-title h1">{{ $projects->count() }} Tane Başarılı Çalışma</h2>
                    </div>
                </div>
                <div class="col-auto align-self-center">
                    <div class="sec-btns">
                        <a href="{{ route('projects') }}" class="vs-btn">Projelerimiz</a>
                    </div>
                </div>
            </div>
            <div class="row project-slide1 vs-carousel gx-45" data-slide-show="3" data-variable-width="true" data-arrows="true">
                @foreach($projects as $project)
                <div class="col-auto">
                    <div class="project-style1 layout2">
                        <div class="project-img"><a href="{{ route('project.detail', ['slug' => $project->slug]) }}"><img src="{{ asset($project->image) }}" alt="{{ $project->title }}"></a></div>
                        <div class="project-content">
                            <span class="project-category">{{ strtoupper( $project->category->name) }}</span>
                            <h3 class="project-title h4"><a href="{{ route('project.detail', ['slug' => $project->slug]) }}" class="text-inherit">{{ $project->sub_title }}</a></h3>
                            <span class="project-energytotal h4">{{ $project->system_size }} <span class="quantity">kWh</span></span>
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
    <!--==============================
    Package Area
    ==============================-->
    <section class=" space">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                    <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1" transform="translate(-926 -1158)"></path>
                </svg>
                <span class="sec-subtitle">PRICING PLAN FOR YOU</span>
                <h2 class="sec-title h1">Pricing Packages</h2>
            </div>
            <div class="row vs-carousel price-slide1 wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true" data-sm-center-mode="true">
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img" data-bg-src="assets/img/price/price-img-1-1.jpg" data-overlay></div>
                            <div class="package-icon"><img src="assets/img/icon/price-1-1.png" alt="price icon"></div>
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
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123 456 2228</a></p>
                            <a href="{{ route('contact') }}" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img" data-bg-src="assets/img/price/price-img-1-2.png" data-overlay></div>
                            <div class="package-icon"><img src="assets/img/icon/price-1-2.png" alt="price icon"></div>
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
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123 456 2228</a></p>
                            <a href="{{ route('contact') }}" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img" data-bg-src="assets/img/price/price-img-1-3.png" data-overlay></div>
                            <div class="package-icon"><img src="assets/img/icon/price-1-4.png" alt="price icon"></div>
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
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123 456 2228</a></p>
                            <a href="{{ route('contact') }}" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img" data-bg-src="assets/img/price/price-img-1-4.png" data-overlay></div>
                            <div class="package-icon"><img src="assets/img/icon/price-1-3.png" alt="price icon"></div>
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
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123 456 2228</a></p>
                            <a href="{{ route('contact') }}" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Brand Area
  ==============================-->
    @if($clients->count() > 0)
    <div class=" space-bottom">
        <div class="container">
            <span class="sec-subtitle text-decoration-underline mb-4 pb-lg-3 text-center">MÜŞTERİ VE MARKALARIMIZ</span>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2">
                @foreach($clients as $client)
                <div class="col-xl-4">
                    <div class="brand-style1">
                        <img src="{{ asset($client->image) }}" alt="{{ $client->name }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
@endsection
