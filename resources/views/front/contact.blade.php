@extends('front.layouts.app')
@section('title', ' - İletişim')
@section('meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ''  )
@section('meta_keywords', !is_null($_siteSetting->meta_keywords) ? $_siteSetting->meta_keywords : ''  )

@section('facebook_meta_title', !is_null($_siteSetting->title) ? $_siteSetting->title.' İletişim Sayfası' : 'İletişim Sayfası')
@section('facebook_meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : 'İletişim Sayfası'  )
@section('facebook_image', !is_null($_siteSetting->logo) ? asset($_siteSetting->logo) : 'İletişim Sayfası'  )

@section('whatsapp_meta_title', !is_null($_siteSetting->title) ? $_siteSetting->title.' İletişim Sayfası' : 'İletişim Sayfası')
@section('whatsapp_meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : 'İletişim Sayfası'  )
@section('whatsapp_image', !is_null($_siteSetting->logo) ? asset($_siteSetting->logo) : 'İletişim Sayfası'  )
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/front/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">İletişim</h1>
                <p class="breadcumb-subtitle">Sorunuz varsa bizimle iletişime geçmekten çekinmeyin.</p>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu-wrap">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}"><i class="fas fa-home-lg"></i>Anasayfa</a></li>
                <li>İletişim</li>
            </ul>
        </div>
    </div>

    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                @if(session()->has('error') || session()->has('success'))
                    @if( session()->has('success'))
                        <div class="col-lg-12">
                            <div class="alert alert-success">
                                <strong>Teşekkürler!</strong> {{ session()->get('success') }}
                            </div>
                        </div>
                    @endif
                    @if( session()->has('error'))
                        <div class="col-lg-12">
                            <div class="alert alert-error">
                                <strong>Üzgünüz!</strong> {{ session()->get('error') }}
                            </div>
                        </div>
                    @endif
                @endif
                <div class="col-lg-6 col-xl-5 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="info-box">
                        <h3 class="info-box-title">İletişim Bilgileri</h3>
                        <div>
                            <div class="vs-media">
                                <div class="media-icon"><i class="fas fa-phone"></i></div>
                                <div class="media-body">
                                    <p class="media-info">İletişim Numarası: <br> <a href="tel:{{ $_siteSetting->phone }}" class="text-inherit">({{ $_siteSetting->phone }})</a></p>
                                </div>
                            </div>
                            <div class="vs-media">
                                <div class="media-icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="media-body">
                                    <p class="media-info">{{ $_siteSetting->address }}</p>
                                </div>
                            </div>
                            <div class="vs-media">
                                <div class="media-icon"><i class="fas fa-envelope"></i></div>
                                <div class="media-body">
                                    <p class="media-info">Email Adresi: <br> <a class="text-inherit" href="mailto:{{ $_siteSetting->email }}">{{ $_siteSetting->email }}</a></p>
                                </div>
                            </div>
                        </div>
                        <h3 class="info-box-title">Bizi Takip Edin</h3>
                        <div class="info-social">
                           @include('front.layouts.social-media')
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-7 wow fadeInUp" data-wow-delay="0.4s">
                    <form class="form-style2 layout2 " action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <h3 class="form-title">Sorunuz varsa bizimle iletişime geçmekten çekinmeyin.</h3>
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="name">Ad-Soyad</label>
                                <input name="name" id="name" type="text" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Adınız Soyadınız">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email Adresi</label>
                                <input name="email" id="email" type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Example@domain.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="number">İletişim Numarası</label>
                                <input name="number" id="number" type="number" class="@error('number') is-invalid @enderror" value="{{ old('number') }}" placeholder="İletişim numaranız">
                            </div>
                            <div class="col-12 form-group">
                                <label for="message">Mesajınız</label>
                                <textarea name="message" id="message" class="@error('message') is-invalid @enderror" value="{{ old('message') }}" placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <button type="submit" class="vs-btn">Gönder</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{--<div class="container space-bottom">
        <div class="ratio ratio-21x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163720.11965853968!2d8.496481908353967!3d50.121347879150306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1665403058628!5m2!1sen!2sbd" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>--}}
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
