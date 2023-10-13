@extends('front.layouts.app')
@section('title', ' - İletişim')
@section('meta_description', !is_null($_siteSetting->meta_description)  ? $_siteSetting->meta_description : ''  )
@section('meta_keywords', !is_null($_siteSetting->meta_keywords)  ? $_siteSetting->meta_keywords : ''  )

@section('facebook_meta_title', !is_null($_siteSetting->title) ? $_siteSetting->title : ' Hakkımızda')
@section('facebook_meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Hakkımızda'  )
@section('facebook_image', !is_null($_siteSetting->logo) ? asset($_siteSetting->logo) : ' Hakkımızda'  )

@section('whatsapp_meta_title', !is_null($_siteSetting->title) ? $_siteSetting->title : ' Hakkımızda')
@section('whatsapp_meta_description', !is_null($_siteSetting->meta_description) ? $_siteSetting->meta_description : ' Hakkımızda'  )
@section('whatsapp_image', !is_null($_siteSetting->logo) ? asset($_siteSetting->logo) : ' Hakkımızda'  )
@section('whatsapp_site_url', route(request()->url()) )

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/front/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Hakkımızda</h1>
                <p class="breadcumb-subtitle">Bize dair her şey.</p>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu-wrap">
        <div class="container">
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}"><i class="fas fa-home-lg"></i>Anasayfa</a></li>
                <li>Hakkımızda</li>
            </ul>
        </div>
    </div>

    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-lg-6 col-xxl-5 text-center text-lg-start mb-20 mb-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="mb-30">
                        <span class="sec-subtitle">GENEL BAKIŞ</span>
                        <h2 class="sec-title h1 mb-3">Topluma Enerji Verin Güvenilir Enerji</h2>
                        <p class="fs-md mb-4 pb-xl-2">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit. Aenea ifendn auctor wisi et ur na. Aliquam er at volutpat. Duis ac tuifendrpis.</p>
                        <h3 class="h4 mb-1">Abdulkadir Meşeci</h3>
                        <p class="text-title fs-xs mb-4">Müdür</p>
                    </div>
                </div>
                <div class="col-auto col-lg-6 col-xl-5 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="progress-style1">
                        <div class="circle-progress" data-value="0.85"><canvas width="110" height="110"></canvas><span class="progress-value">85%</span></div>
                        <div class="media-body">
                            <h3 class="progress-title h5">Hidroelektrik Santrali</h3>
                            <p class="progress-text">Suyun hızını elektriğe dönüştürüyoruz.</p>
                        </div>
                    </div>
                    <div class="progress-style1">
                        <div class="circle-progress" data-value="0.85"><canvas width="110" height="110"></canvas><span class="progress-value">85%</span></div>
                        <div class="media-body">
                            <h3 class="progress-title h5">Güneş Enerjisi</h3>
                            <p class="progress-text">Güneş enerjisini elektriğe dönüştürüyoruz.</p>
                        </div>
                    </div>
                    <div class="progress-style1">
                        <div class="circle-progress" data-value="0.85"><canvas width="110" height="110"></canvas><span class="progress-value">85%</span></div>
                        <div class="media-body">
                            <h3 class="progress-title h5">Rüzgar Türbinleri</h3>
                            <p class="progress-text">Rüzgar enerjisini elektriğe dönüştürüyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($services->count() > 0)
    <section class=" space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="title-area">
                        <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                            <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1" transform="translate(-926 -1158)"></path>
                        </svg>
                        <span class="sec-subtitle">SUNDUKLARIMIZ</span>
                        <h2 class="sec-title h1">Profesyonel Hizmetler</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true" data-sm-center-mode="true" data-xs-center-mode="true" data-dots="true">
                @foreach($services as  $service)
                <div class="col-xl-4">
                    <div class="service-style2">
                        <div class="service-head">
                            <h3 class="service-title h4"><a class="text-inherit" href="{{ route('service.detail', ['slug' => $service->slug]) }}">{{ $service->title }}</a></h3>
                            <div class="service-icon"><img src="{{ $service->icon }}" alt="{{ $service->title }}"></div>
                        </div>
                        <div class="service-img"><img src="{{ $service->image }}" alt="{{ $service->title }}" style="width: 391px; height: 210px;"></div>
                        <div class="service-body">
                            <p class="service-text">{{  $service->short_decsription }}</p>

                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <section class="overflow-hidden bg-light-1  ">
        <div class="container">
            <div class="row gx-60 flex-row-reverse justify-content-between align-items-center">
                <div class="col-lg-5 col-xl-6 z-index-common wow fadeInUp" data-wow-delay="0.3s">
                    <div class="img-box7">
                        <div class="img-1"><img src="{{ asset('assets/front/img/about/faq-3-1.jpg') }}" alt="about thumbnail"></div>
                        <div class="img-shape1"></div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 space py-xl-0 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="title-area mb-3 pb-1">
                        <span class="sec-subtitle">NEDEN BİZİ SEÇMELİSİNİZ?</span>
                        <h2 class="sec-title h1">Sürdürülebilir Bir Gelecek İnşa Ediyoruz</h2>
                    </div>
                    <div class="accordion accordion-style2" id="faqVersion1">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    En İyi Enerji Çözümleri
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Yerinde inceleme yaparak en iyi enerji çözümünü sunuyoruz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  İş Tesliminde Hizmete Devam Ediyoruz.
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>İşimiz bitince de sürekli hizmetlerimize devam ediyoruz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Alanında Uzmanlık
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Alanında uzman ekipler ile çalışıyoruz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Enerji Faturalarınızdan Tasarruf Edin
                                </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p>Yerinde inceleme yaparak önerdiğimiz en iyi enerji çözümü ile beraber faturalarınızdan tasarruf etmenizi sağlıyoruz.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" space-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-6 col-xxl wow fadeInUp" data-wow-delay="0.4s">
                    <span class="sec-subtitle">ÇALIŞMALARIMIZIN TAKİPÇİSİYİZ</span>
                    <h2 class="sec-title h1 mb-5">Nasıl Çalışıyoruz?</h2>
                    <div class="process-style1">
                        <div class="process-item">
                            <h3 class="process-title h5">Talep Yanıtı</h3>
                            <div class="process-content">
                                <span class="process-number">1</span>
                                <p class="process-text">Taleplerinizi en iyi şekilde yanıtlıyoruz.</p>
                            </div>
                        </div>
                        <div class="process-item">
                            <h3 class="process-title h5">Yük Kayması</h3>
                            <div class="process-content">
                                <span class="process-number">2</span>
                                <p class="process-text">Sizlere uygun seçenekler ile yüklerinizi dengeliyoruz.</p>
                            </div>
                        </div>
                        <div class="process-item">
                            <h3 class="process-title h5">Yenilenebilir</h3>
                            <div class="process-content">
                                <span class="process-number">3</span>
                                <p class="process-text">Herhangi bir yere zarar vermeden yenilenebilir enerji ile çözüm üretiyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($clients->count() > 0)
    <section class=" space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5 col-xxl-4 align-self-center mb-40 mb-xl-0 text-center text-xl-start wow fadeInUp" data-wow-delay="0.3s">
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
