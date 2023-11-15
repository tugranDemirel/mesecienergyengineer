@extends('front.layouts.app')
@section('title', ' - Projelerimiz')
@section('meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ''  )
@section('meta_keywords', isset($_siteSetting->meta_keywords) ? $_siteSetting->meta_keywords : ''  )


@section('facebook_meta_title', isset($_siteSetting->title) ? $_siteSetting->title : ' Projelerimiz')
@section('facebook_meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Projelerimiz'  )
@section('facebook_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : 'Projelerimiz'  )


@section('whatsapp_meta_title', isset($_siteSetting->title) ? $_siteSetting->title : ' Projelerimiz')
@section('whatsapp_meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Projelerimiz'  )
@section('whatsapp_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : 'Projelerimiz'  )
@section('css')
    <meta property="wa:type" content="article">
    <meta property="og:type" content="article">
@endsection
@section('content')
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/front/images/page-titles/10.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <h1 class="pagetitle__heading mb-0">Projelerimiz</h1>
                    <p class="pagetitle__desc mb-0">
                        Yenilikçi teknolojilerimiz, müşterilerimizin ihtiyaçlarına net bir şekilde odaklanmamız ve 30'dan fazla kendini adamış çalışanımızla topluma enerji veriyoruz. Yarını bugünden farklı kılalım!</p>
                    <a href="#projects" class="scroll-down">
                        <i class="icon-arrow-down"></i>
                    </a>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section id="projects" class="portfolio-layout3">
        <div class="container">

            <div id="filtered-items-wrap" class="row">
                @foreach($projects as $project)
                <!-- portfolio item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-4 mix filter-infractures">
                    <div class="portfolio-item">
                        <div class="portfolio__img">
                            <img src="{{ asset($project->image) }}" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio__body">
                            <h4 class="portfolio__title"><a href="#">
                                    {{ $project->title }}
                                </a></h4>
                            <p class="portfolio__desc">
                                {{ $project->sub_title }}
                            </p>
                            <a href="{{ route('project.detail', ['slug' => $project->slug]) }}" class="btn btn__primary btn__sm">
                                <i class="icon-arrow-right"></i>
                                <span>
                                    Detaylar
                                </span>
                            </a>
                        </div><!-- /.portfolio__body -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section><!-- /.portfolio standard -->


@endsection
