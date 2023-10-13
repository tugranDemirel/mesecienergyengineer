@extends('front.layouts.app')
@section('title', ' - '.$service->title)
@section('meta_description', !is_null($service->title) ? $service->title : ''  )
@section('meta_keywords', !is_null($service->short_description) ? $service->short_description : ''  )

@section('facebook_meta_title', !is_null($service->title) ? $service->title : ' Servis Detay')
@section('facebook_meta_description', !is_null($service->short_description) ? $service->short_description : ' Servis Detay'  )
@section('facebook_image', !is_null($service->image) ? asset($service->image) : 'Servis Detay'  )

@section('whatsapp_meta_title', !is_null($service->title) ? $service->title : ' Servis Detay')
@section('whatsapp_meta_description', !is_null($service->short_description) ? $service->short_description : ' Servis Detay'  )
@section('whatsapp_image', !is_null($service->image) ? asset($service->image) : 'Servis Detay'  )
@section('css')
    <meta property="wa:type" content="article">
    <meta property="og:type" content="article">
@endsection

@section('content')

    <div class="breadcumb-wrapper " data-bg-src="{{ asset($service->bg_image) ?? asset('assets/front/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Hizmet Detayı</h1>
                <p class="breadcumb-subtitle">{{$service->title}}</p>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu-wrap">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}"><i class="fas fa-home-lg"></i>Anasayfa</a></li>
                <li>{{ $service->title }}</li>
            </ul>
        </div>
    </div>
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-between flex-row-reverse gx-60">
                <div class="col-xl-7 col-xxl-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="img-box9">
                        <div class="img-1"><img src="{{ $service->image }}" alt="thumbnail"></div>
                        <div class="img-2"><img src="{{ $service->image2 }}" alt="thumbnail"></div>
                        <div class="img-shape1"></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-4 align-self-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="vs-media about-media2">
                        <div class="media-icon"><img src="{{ $service->icon }}" alt="feature icon"></div>
                        <div class="media-body">
                            <span class="media-title h3">{{ $service->title }}</span>
                            <p class="media-info">{{ $service->short_description }}</p>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="vs-btn style2 mb-30">İletişime Geçin</a>
                </div>
            </div>
            <p>
                {!! $service->detail !!}
            </p>
            <div class=" space-extra-top mb-30">
                <span class="sec-subtitle">İHTİYACINIZ OLAN HER ŞEY</span>
                <h2 class="sec-title mb-4">Ne Sağlıyoruz?</h2>
                <div class="row gx-0">
                    <div class="col-md-6 col-lg-4 feature-style2 style2  wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-body">
                            <div class="feature-icon"><i class="far fa-check"></i></div>
                            <h3 class="feature-title h5">Eşsiz Deneyim</h3>
                            <p class="feature-text">Ömür boyu sizleri memnun edecek ve eşsiz deneyim yaşatacak hizmetlere imza atıyoruz.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 feature-style2 style2  wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-body">
                            <div class="feature-icon"><i class="far fa-check"></i></div>
                            <h3 class="feature-title h5">Paradan Tasarruf Edin</h3>
                            <p class="feature-text">Paranızın fazlası ile çöpe gitmesini engelliyoruz.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 feature-style2 style2  wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-body">
                            <div class="feature-icon"><i class="far fa-check"></i></div>
                            <h3 class="feature-title h5">Danışmanlık & Planlama</h3>
                            <p class="feature-text">Planlama ve dasnışmanlık hizmeti vererek sizler için en uygun hizmeti veriyoruz.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 feature-style2 style2  wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-body">
                            <div class="feature-icon"><i class="far fa-check"></i></div>
                            <h3 class="feature-title h5">Ürün Güvenirliliği</h3>
                            <p class="feature-text">İşimizi en uygun ürünlerle yapmaktayız.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
