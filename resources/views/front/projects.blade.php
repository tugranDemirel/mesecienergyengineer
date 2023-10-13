@extends('front.layouts.app')
@section('title', ' - Projelerimiz')
@section('meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ''  )
@section('meta_keywords', !is_null($_siteSetting->meta_keywords) ? $_siteSetting->meta_keywords : ''  )


@section('facebook_meta_title', !is_null($_siteSetting->title) ? $_siteSetting->title : ' Projelerimiz')
@section('facebook_meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Projelerimiz'  )
@section('facebook_image', !is_null($_siteSetting->logo) ? asset($_siteSetting->logo) : 'Projelerimiz'  )


@section('whatsapp_meta_title', !is_null($_siteSetting->title) ? $_siteSetting->title : ' Projelerimiz')
@section('whatsapp_meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Projelerimiz'  )
@section('whatsapp_image', !is_null($_siteSetting->logo) ? asset($_siteSetting->logo) : 'Projelerimiz'  )
@section('whatsapp_site_url', route(request()->url()) )
@section('css')
    <meta property="wa:type" content="article">
    <meta property="og:type" content="article">
@endsection
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/front/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Projelerimiz</h1>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu-wrap">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}"><i class="fas fa-home-lg"></i>Anasayfa</a></li>
                <li>Projelerimiz</li>
            </ul>
        </div>
    </div>
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-40 gy-3">
                @php $i = 3; @endphp
                @foreach($projects as $project)
                <div class="col-auto  wow fadeInUp" data-wow-delay="0.{{ $i++ }}s">
                    <div class="project-style1">
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

@endsection
