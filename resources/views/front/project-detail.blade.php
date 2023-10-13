@extends('front.layouts.app')
@section('title', ' - '.$project->title)
@section('meta_description', $project->short_description )
@section('meta_keywords', $project->title)

@section('facebook_meta_title', !is_null($project->title) ? $project->title : '')
@section('facebook_meta_description', !is_null($project->short_description) ? $project->short_description : ''  )
@section('facebook_image', !is_null($project->image) ? asset($project->image) : ''  )

@section('whatsapp_meta_title', !is_null($project->title) ? $project->title : '')
@section('whatsapp_meta_description', !is_null($project->short_description) ? $project->short_description : ''  )
@section('whatsapp_image', !is_null($project->image) ? asset($project->image) : ''  )
@section('css')
    <meta property="wa:type" content="article">
    <meta property="og:type" content="article">
@endsection
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/front/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Proje Detayları</h1>
                <p class="breadcumb-subtitle">{{ $project->title }}</p>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu-wrap">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}"><i class="fas fa-home-lg"></i>Anasayfa</a></li>
                <li>Proje Detayları</li>
            </ul>
        </div>
    </div>
    <section class="vs-product-wrapper space-top space-extra-bottom">
        <div class="container">
            <span class="sub-title2">{{ strtoupper($project->category->name) }}</span>
            <h2>{{ $project->title }}</h2>
            <div class="row gx-0 pt-3">

                <div class="col-md-6 col-lg-4 col-xl-3 project-media">
                    <span class="media-title">TEKNOLOJİ</span>
                    <p class="media-info">{{ $project->technology }}</p>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 project-media">
                    <span class="media-title">SİSTEM BÜYÜKLÜĞÜ</span>
                    <p class="media-info">{{ $project->system_size }} kWh</p>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 project-media">
                    <span class="media-title">BAŞLAMA TARİHİ</span>
                    <p class="media-info">{{ date('m-d-Y', strtotime($project->started_date)) }}</p>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 project-media">
                    <span class="media-title">BİTİŞ TARİHİ</span>
                    <p class="media-info">{{ date('m-d-Y', strtotime($project->ended_date)) ?? '-' }}</p>
                </div>
            </div>
            <div class="mt-25 mb-25 pt-lg-4 pb-lg-3">
                <img src="{{ asset($project->image) }}" alt="{{ $project->slug }}" class="w-100">
            </div>
            <div class="row gx-50 pt-2 pt-lg-4">
                <div class="col-xl-7">
                    <h3 class="h4">{{ $project->sub_title }}</h3>
                    <p class="pe-5 me-xxl-5">
                        {!! $project->description !!}
                    </p>
                </div>
                @if(!is_null($project->client_quote))
                <div class="col-xl-5">
                    <div class="vs-quote2">
                        <h4 class="border-title h5">Müşteri Notu</h4>
                        <p class="quote-text">“{{ $project->client_quote }}”</p>

                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    @if(count($projects) > 0)
    <section class=" space-extra-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="title-area">
                        <span class="sec-subtitle">PROJELERİMİZ</span>
                    </div>
                </div>
                @if(count($projects) > 2)
                <div class="col-auto">
                    <div class="sec-btns">
                        <button class="icon-btn style3" data-slick-prev="#projectslide6"><i class="fas fa-chevron-left"></i></button>
                        <button class="icon-btn style3" data-slick-next="#projectslide6"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
                @endif
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" id="projectslide6" data-slide-show="2" data-lg-slide-show="2" data-md-slide-show="2" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true" data-sm-center-mode="true">
                @foreach($projects as $projectx)
                <div class="col-xl-6">
                    <div class="project-style1 layout3">
                        <div class="project-img"><a href="{{ route('project.detail', ['slug' => $projectx->slug]) }}"><img src="{{ $projectx->image }}" alt="project image"></a></div>
                        <div class="project-content">
                            <div class="project-body">
                                <span class="project-category">{{ $projectx->category->name }}</span>
                                <h3 class="project-title2 h4"><a href="{{ route('project.detail', ['slug' => $projectx->slug]) }}" class="text-inherit">{{ $projectx->sub_title }}</a></h3>
                                <div class="project-energy">
                                    <span class="project-energytotal h4">{{ $projectx->system_size }} <span class="quantity">kWh</span></span>
                                    <p class="project-energytext">{{ $projectx->title }}</p>
                                </div>
                            </div>
                            <div class="shape-dotted"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
