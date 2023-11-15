@extends('front.layouts.app')
@section('title', ' - '.$service->title)
@section('meta_description', isset($service->title) ? $service->title : ''  )
@section('meta_keywords', isset($service->short_description) ? $service->short_description : ''  )

@section('facebook_meta_title', isset($service->title) ? $service->title : ' Servis Detay')
@section('facebook_meta_description', isset($service->short_description) ? $service->short_description : ' Servis Detay'  )
@section('facebook_image', isset($service->image) ? asset($service->image) : 'Servis Detay'  )

@section('whatsapp_meta_title', isset($service->title) ? $service->title : ' Servis Detay')
@section('whatsapp_meta_description', isset($service->short_description) ? $service->short_description : ' Servis Detay'  )
@section('whatsapp_image', isset($service->image) ? asset($service->image) : 'Servis Detay'  )
@section('css')
    <meta property="wa:type" content="article">
    <meta property="og:type" content="article">
@endsection

@section('content')
    <section class="page-title pt-30 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav>
                        <ol class="breadcrumb justify-content-center mb-20">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('services') }}">Hizmetlerimiz</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $service->title }}
                            </li>
                        </ol>
                    </nav>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <section class="blog blog-single pt-0 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="post-item mb-0">
                        <div class="post__img">
                            <a href="#">
                                <img src="{{ asset($service->image) }}" alt="post image">
                            </a>
                        </div><!-- /.entry-img -->
                        <div class="post__body">
                            <div class="post__meta d-flex align-items-center">
                                <a href="#" class="post__meta-cat">{{ $service->title }}</a>
                                <span class="post__meta-date">{{ $service->created_at->format('d M Y') }}</span>
                            </div><!-- /.entry-meta -->
                            <h1 class="post__title">
                                {{ $service->sub_title }}
                            </h1>
                            <div class="post__desc">
                                {!! $service->detail !!}
                            </div><!-- /.post-desc -->
                        </div><!-- /.entry-content -->
                    </div><!-- /.post-item -->

                    <div class="widget-nav d-flex justify-content-between mb-40 pt-30 pb-30 border-top border-bottom">
                        @if(isset($otherServices[0]))
                        <a href="{{ route('service.detail', ['slug' => $otherServices[0]->slug]) }}" class="widget-nav__prev d-flex flex-wrap">
                            <div class="widget-nav__img">
                                <img src="{{ assert($otherServices[0]->image) }}" alt="{{ $otherServices[0]->title }}">
                            </div>
                            <div class="widget-nav__content">
                                <span>Önceki</span>
                                <h5 class="widget-nav__ttile mb-0">{{ $otherServices[0]->title }}</h5>
                            </div>
                        </a><!-- /.widget-prev  -->
                        @endif
                        @if(isset($otherServices[1]))
                        <a href="{{ route('service.detail', ['slug' => $otherServices[1]->slug]) }}" class="widget-nav__next d-flex flex-wrap">
                            <div class="widget-nav__img">
                                <img src="{{ assert($otherServices[1]->image) }}" alt="{{ $otherServices[1]->title }}">
                            </div>
                            <div class="widget-nav__content">
                                <span>Sonraki</span>
                                <h5 class="widget-nav__ttile mb-0">{{ $otherServices[1]->title }}</h5>
                            </div>
                        </a><!-- /.widget-next  -->
                        @endif
                    </div>

                </div><!-- /.col-lg-8 -->
                @if($otherServices->count() > 0)
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar">

                        <div class="widget widget-posts">
                            <h5 class="widget__title">
                                Diğer Hizmetlerimiz
                            </h5>
                            <div class="widget__content">
                                <!-- post item #1 -->
                                @foreach($otherServices as $otherService)
                                <div class="widget-post-item d-flex align-items-center">
                                    <div class="widget-post__img">
                                        <a href="#"><img src="{{ asset($otherService->image) }}" alt="{{ $otherService->title }}"></a>
                                    </div><!-- /.widget-post-img -->
                                    <div class="widget-post__content">
                                        <span class="widget-post__date">
                                            {{ $otherService->created_at->format('d M Y') }}
                                        </span>
                                        <h4 class="widget-post__title"><a href="{{ route('service.detail', ['slug' => $otherService->slug]) }}">
                                            {{ $otherService->title }}
                                            </a>
                                        </h4>
                                    </div><!-- /.widget-post-content -->
                                </div><!-- /.widget-post-item -->
                                @endforeach
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget-posts -->

                    </aside><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
                @endif
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog Single -->

@endsection
