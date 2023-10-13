@extends('front.layouts.app')
@section('title', ' - Hizmetlerimiz')
@section('meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ''  )
@section('meta_keywords', !is_null($_siteSetting->meta_keywords) ? $_siteSetting->meta_keywords : ''  )


@section('facebook_meta_title', !is_null($_siteSetting->title) ? $_siteSetting->title : ' Hizmetlerimiz')
@section('facebook_meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Hizmetlerimiz'  )
@section('facebook_image', !is_null($_siteSetting->logo) ? asset($_siteSetting->logo) : 'Hizmetlerimiz'  )

@section('whatsapp_meta_title', !is_null($_siteSetting->title) ? $_siteSetting->title : ' Hizmetlerimiz')
@section('whatsapp_meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Hizmetlerimiz'  )
@section('whatsapp_image', !is_null($_siteSetting->logo) ? asset($_siteSetting->logo) : 'Hizmetlerimiz'  )
@section('whatsapp_site_url', route(request()->url()) )
@section('css')
    <meta property="wa:type" content="article">
    <meta property="og:type" content="article">
@endsection
@section('content')

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
    @if($clients->count() > 0)
    <div class=" space-bottom">
        <div class="container">
            <span class="sec-subtitle text-decoration-underline mb-4 pb-lg-3 text-center">MÜŞTERİ VE MARKALARIMIZ</span>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2">
                @foreach($clients as $client)
                <div class="col-xl-4">
                    <div class="brand-style1">
                        <img src="{{ asset($client->image) }}" alt="{{ $client->name }}" style="width: 122px; height: 78px;">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
@endsection
