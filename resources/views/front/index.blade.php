@extends('front.layouts.app')
@section('title', ' - Anasayfa')
@section('meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ''  )
@section('meta_keywords', isset($_siteSetting->meta_keywords) ? $_siteSetting->meta_keywords : ''  )

@section('facebook_meta_title', isset($_siteSetting->title) ? $_siteSetting->title : '')
@section('facebook_meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ''  )
@section('facebook_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ''  )

@section('whatsapp_meta_title', isset($_siteSetting->title) ? $_siteSetting->title : '')
@section('whatsapp_meta_description', isset($_siteSetting->meta_description) ? $_siteSetting->meta_description : ''  )
@section('whatsapp_image', isset($_siteSetting->logo) ? asset($_siteSetting->logo) : ''  )
@section('content')

    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
             data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
            @foreach($sliders as $slider)
                <div class="slide-item align-v-h bg-overlay {{ $loop->first ? 'bg-overlay-2' : '' }}">
                    <div class="bg-img"><img src="{{ asset($slider->image) }}" alt="slide img"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                <div class="slide__body">
                                    <h2 class="slide__title">{{ $slider->description }} </h2>

                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('services') }}" class="btn btn__white mr-30">
                                            <i class="icon-arrow-right"></i><span>Daha fazlası için</span>
                                        </a>
                                        @isset($slider->url)
                                        <a class="video__btn video__btn-white popup-video"
                                           href="{{ $slider->url }}">
                                            <div class="video__player">
                                                <i class="fa fa-play"></i>
                                            </div>
                                            <span class="video__btn-title color-white pl-30">Videomuz!</span>
                                        </a>
                                        @endisset
                                    </div>
                                </div><!-- /.slide__body -->
                            </div><!-- /.col-xl-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.slide-item -->
            @endforeach
        </div><!-- /.carousel -->
    </section><!-- /.slider -->


    <section class="features-layout4 py-0">
        <div class="container">
            <div class="row row-no-gutter features-wrapper">
                <!-- Feature item #1 -->
                @foreach($services as $service)
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__icon custom-icon">
                            {!! $service->icon !!}
                        </div>
                        <h4 class="feature__title">{{ $service->title }}</h4>
                        <p class="feature__desc">{{ $service->short_description }}
                        </p>
                        <a href="{{ route('service.detail', ['slug' => $service->slug]) }}" class="btn__link">
                            <i class="icon-arrow-right icon-filled"></i>
                            <span>Daha fazlası</span>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features Layout 4 -->

    <section class="features-layout1 pt-120 pb-80 mt-100">
        <div class="bg-img"><img src="{{ asset('assets/front/images/backgrounds/3.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row mb-40">
                <div class="col-12">
                    <h2 class="heading__subtitle color-primary">Yarınınızı bugünden daha farklı hale getirin.</h2>
                </div><!-- /col-12 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title color-white">Sürdürülebilir ve Güvenilir Enerji Sistemleriyle Topluma Enerji Verin!</h3>
                </div><!-- /col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading__desc color-gray mb-20">
                        Son yıllarda, PV pazarının büyümesini desteklemek için güneş enerjisi değer zincirinde yeni kapasite gerekli hale geldi. Ancak levha, güneş pili ve güneş modülü üretim tesislerinin kurulması ve büyütülmesi için gereken sermaye oldukça fazladır.
                    </p>
                    <p class="heading__desc color-gray mb-30">Bu faktörler bir araya geldiğinde, küresel güneş enerjisi üreticilerinin sürdürülebilir çalışması ve büyümesi açısından ciddi bir zorluk teşkil ediyor.</p>
                    <a href="#" class="btn btn__primary btn__outlined btn__custom">
                        <i class="icon-arrow-right"></i>
                        <span>Tüm özellikleri keşfedin</span>
                    </a>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3, "slidesToScroll": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                        <!-- Feature item #1 -->
                        <div class="feature-item">
                            <div class="feature__icon">
                                <i class="icon-hydro-power3"></i>
                            </div>
                            <h4 class="feature__title">Paranızı Tasarrıf Edin</h4>
                            <p class="feature__desc">
                                Güneş enerjisi kurarak kamu hizmetlerinden tasarruf edin veya evinizin değerini artırın.
                            </p>
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Daha fazlası için</span>
                            </a>
                        </div><!-- /.feature-item -->
                        <!-- Feature item #2 -->
                        <div class="feature-item">
                            <div class="feature__icon">
                                <i class="icon-eco-house"></i>
                            </div>
                            <h4 class="feature__title">Eviniz Enerjidir</h4>
                            <p class="feature__desc">
                                Her gün güneş bize güneş enerjisiyle ücretsiz bol miktarda enerji sağlar.
                            </p>
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Daha fazlası için</span>
                            </a>
                        </div><!-- /.feature-item -->
                        <!-- Feature item #3 -->
                        <div class="feature-item">
                            <div class="feature__icon">
                                <i class="icon-energy2"></i>
                            </div>
                            <h4 class="feature__title">
                                Danışmanlık ve Planlama
                            </h4>
                            <p class="feature__desc">
                                Uzaktaki endüstriyel güneş sistemlerimiz, müşterilerimizin ihtiyaçlarını karşılamak için güvenilir bir şekilde çalışacak şekilde tasarlanmıştır.
                            </p>
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Daha fazlası için</span>
                            </a>
                        </div><!-- /.feature-item -->
                        <!-- Feature item #4 -->
                        <div class="feature-item">
                            <div class="feature__icon">
                                <i class="icon-electric-car"></i>
                            </div>
                            <h4 class="feature__title">
                                Sertifikalı Mühendisler
                            </h4>
                            <p class="feature__desc">
                                Satış mühendislerimiz, tecrübeye sahiptir ve herhangi bir tam güneş enerjisi sistemi tasarlayabilir.
                            </p>
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-filled"></i>
                                <span>Daha fazlası için</span>
                            </a>
                        </div><!-- /.feature-item -->
                    </div><!-- /.carousel-->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="read-note d-flex flex-wrap mt-60">
                        <div class="rating mb-10 mr-50">
                            <i class="fas fa-star color-primary"></i>
                            <i class="fas fa-star color-primary"></i>
                            <i class="fas fa-star color-primary"></i>
                            <i class="fas fa-star color-primary"></i>
                            <i class="fas fa-star color-primary"></i>
                        </div>
                        <p class="read-note__text">
                            <span class="font-weight-bold text-underlined-primary color-primary">
                                %99,9 Müşteri Memnuniyeti
                            </span>
                            100'den fazla müşteriye güneş enerjisi sistemleri kurduk.
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->

    <section class="banner-layout1 py-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="text-block">
                        <div class="banner__text">
                            <p>

                                Güneş enerjisi ürünlerinin verimini ve performansını artırırken, PV sektörü deneyimimiz her adımda derinlemesine malzeme tedariki, finansman ve tedarik zinciri uzmanlığı sunmamıza olanak sağlar.
                            </p>
                        </div><!-- /.banner__text -->
                        <ul class="list-items list-items-layout2 list-unstyled mb-0">
                            <li>Sertifikasyon için profesyonel yerinde servis ve destek.</li>
                            <li>Kararlı dönüşüm verimliliği için düzenli ışık kaynağı.</li>
                            <li>Periyodik izleme ve üstün plaka ile en düşük LID.</li>
                        </ul>
                    </div><!-- /.text-block -->
                </div><!-- /.col-lg-7 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="img-block">
                        <img src="{{ asset('assets/front/images/banners/1.png') }}" alt="banner">
                    </div><!-- /.img-block -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner layout 1 -->
@if($projects->count() > 0)
    <section class="portfolio-layout1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-layout2 mb-40">
                        <h3 class="heading__title">Son Projelerimiz</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- portfolio item #1 -->
                @foreach($projects as $project)
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio__img">
                            <img src="{{ asset($project->image) }}" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio__body">
                            <div class="portfolio__cat">
                            </div><!-- /.portfolio-cat -->
                            <h4 class="portfolio__title"><a href="#">{{ $project->title }}</a></h4>
                        </div><!-- /.portfolio__body -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                <!-- portfolio item #7 -->
                @endforeach
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <button type="button" class="btn btn__primary btn__loadMore loadMoreportfolio">
                        <i class="icon-arrow-right"></i><span>Bütün Projelerimiz</span>
                    </button>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.portfolio layout1 -->
@endif
    <section class="banner-layout3 bg-overlay bg-overlay-primary">
        <div class="bg-img"><img src="{{ asset('assets/front/images/banners/5.jpg') }}" alt="banner"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2 heading-light mb-40">
                        <h2 class="heading__title">Devam Eden Ürün ve Yenilik Yoluyla Müşterilerimize Değer Sağlıyoruz.</h2>
                    </div><!-- /.heading -->
                    <div class="row counter-light">
                        <div class="col-sm-6">
                            <div class="counter-item">
                                <h4 class="counter">150</h4>
                                <p class="counter__desc">Bugüne Kadar Tamamlanan Toplam Proje ve Sistem</p>
                            </div>
                            <p class="color-gray">
                                Ancak değişimi benimseyenler gelişiyor; daha büyük, daha iyi, daha hızlı ve daha güçlü ürünler üretiyorlar
                            </p>
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="counter-item">
                                <h4 class="counter">30</h4>
                                <p class="counter__desc">
                                    Nitelikli Çalışanlar ve İşçiler Bizimle</p>
                            </div>
                            <p class="color-gray">
                                Saldırıyı yönetmeye yardımcı oluyorsunuz; geçmişinizi geliştirmenize ve geleceğin değişimini daha hızlı hazırlamanıza yardımcı olabiliriz.
                            </p>
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner layout 3 -->

    <section class="cta-layout2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-container d-flex flex-wrap">
                        <div class="cta__item d-flex">
                            <div class="cta__icon custom-icon">
                                <i class="icon-solar-panel"></i>
                            </div><!-- /.cta__icon -->
                            <div class="cta__body">
                                <h4 class="cta__title">Tasarım ve Nakliye</h4>
                                <p class="cta__desc">
                                    Tesisat kullanımınızı ve ekipman seçiminizi karşılayan bir sistem tasarlamak ve sunmak için sizinle işbirliği yapıyoruz.</p>
                                <a href="{{ route('contact') }}" class="btn btn__link btn__primary">
                                    <i class="icon-arrow-right"></i>
                                    <span>Bizimle İletişime Geçin</span>
                                </a>
                            </div><!-- /.cta__body -->
                        </div><!-- /.cta__item -->
                        <div class="cta__item d-flex">
                            <div class="cta__icon custom-icon">
                                <i class="icon-energy"></i>
                            </div><!-- /.cta__icon -->
                            <div class="cta__body">
                                <h4 class="cta__title">Kurulum & Sözleşme</h4>
                                <p class="cta__desc">İster sistemi kendiniz kurun, ister kurulumu doğrudan yöneten yerel yüklenicileri işe alın.</p>
                                <a href="#" class="btn btn__link btn__primary">
                                    <i class="icon-arrow-right"></i>
                                    <span>Bizimle İletişime Geçin</span>
                                </a>
                            </div><!-- /.cta__body -->
                        </div><!-- /.cta__item -->
                    </div><!-- /.cta -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <p class="text__link text-center mt-40 mb-0">Bağımsızlığı güneşin gücüyle keşfedin,
                        <a href="#">
                            <span>Planlarımızı Keşfedin</span> <i class="icon-arrow-right"></i>
                        </a>
                    </p>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta layout 2 -->
@if($clients->count() > 0)
    <section class="clients border-top py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel"
                         data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                        @foreach($clients as $client)
                        <div class="client">
                            <a href="#"><img src="{{ asset($client->image) }}" alt="{{ $client->name ?? '' }}"></a>
                        </div><!-- /.client -->
                        @endforeach
                    </div><!-- /.carousel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.clients -->
@endif
@endsection
