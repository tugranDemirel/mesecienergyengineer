@extends('front.layouts.app')
@section('title', ' - Hizmetlerimiz')
@section('meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ''  )
@section('meta_keywords', isset($_siteSetting->meta_keywords) ? $_siteSetting->meta_keywords : ''  )


@section('facebook_meta_title', isset($_siteSetting->title) ? $_siteSetting->title : ' Hizmetlerimiz')
@section('facebook_meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Hizmetlerimiz'  )
@section('facebook_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : 'Hizmetlerimiz'  )

@section('whatsapp_meta_title', isset($_siteSetting->title) ? $_siteSetting->title : ' Hizmetlerimiz')
@section('whatsapp_meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Hizmetlerimiz'  )
@section('whatsapp_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : 'Hizmetlerimiz'  )
@section('css')
    <meta property="wa:type" content="article">
    <meta property="og:type" content="article">
@endsection
@section('content')

    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img">
            <img src="{{ asset('assets/front/images/page-titles/11.jpg') }}" alt="background">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hizmetlerimiz</li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading mb-0">Hizmetlerimiz</h1>
                    <a href="#careers" class="scroll-down">
                        <i class="icon-arrow-down"></i>
                    </a>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="post-grid">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <!-- Post Item #6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="{{ route('service.detail', ['slug' => $service->slug]) }}">
                                <img src="{{ asset($service->image) }}" alt="post image" loading="lazy">
                            </a>
                        </div><!-- /.post-img -->
                        <div class="post__body">

                            <h4 class="post__title"><a href="#">
                                {{ $service->title }}
                                </a></h4>
                            <p class="post__desc">
                                {{ $service->short_description }}
                            </p>
                            <a href="{{ route('service.detail', ['slug' => $service->slug]) }}" class="btn btn__secondary btn__outlined btn__custom">
                                <i class="icon-arrow-right"></i>
                                <span>
                                    Daha Fazla Oku
                                </span>
                            </a>
                        </div><!-- /.post-content -->
                    </div><!-- /.post-item -->
                </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Grid -->

@endsection
