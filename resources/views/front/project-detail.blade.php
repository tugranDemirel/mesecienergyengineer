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

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout8 pt-40 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('projects') }}">Projelerimiz</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
                        </ol>
                    </nav>
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
     portfolio single
    ========================= -->
    <section class="portfolio-single py-0">
        <div class="bg-img">
            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="portfolio-item">
                        <div class="portfolio__body d-flex">
                            <div class="portfolio__icon custom-icon">
                                <i class="icon-solar-panel"></i>
                            </div>
                            <div>
                                <h2 class="portfolio__title">{{ $project->title }}</h2>
                                <p class="portfolio__desc">{{ $project->sub_title }}</p>

                            </div>
                        </div><!-- /.portfolio__body -->
                    </div><!-- /.portfolio-item  -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.portfolio single -->

    <!-- ======================
     Text Content
    ========================= -->
    <section class="pt-150">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <span class="text__block-subtitle">Genel Bakış!</span>
                    <h5 class="text__block-title">{{ $project->title }}
                    </h5>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="text__block-desc">
                        {!! $project->description !!}
                    </p>
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
        </div>
    </section><!-- /.Text Content -->


    {{--    <section class="py-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="slick-carousel carousel-arrows-light"
                             data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                                <img src="assets/images/gallery/1.jpg" alt="gallery img">
                            </a>
                            <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                                <img src="assets/images/gallery/2.jpg" alt="gallery img">
                            </a>
                            <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                                <img src="assets/images/gallery/3.jpg" alt="gallery img">
                            </a>
                            <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                                <img src="assets/images/gallery/4.jpg" alt="gallery img">
                            </a>
                            <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                                <img src="assets/images/gallery/5.jpg" alt="gallery img">
                            </a>
                            <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                                <img src="assets/images/gallery/6.jpg" alt="gallery img">
                            </a>
                        </div><!-- /.gallery-images-wrapper -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.Gallery -->--}}

    <section class="counters pt-0 pb-100">
        <div class="container">
            <div class="row">
                <!-- counter item #1 -->
                <div class="col-6 col-sm-3">
                    <div class="counter-item">
                        <h4 class="counter">150</h4>
                        <p class="counter__desc">Bugüne Kadar Tamamlanan Toplam Proje ve Sistem</p>
                        <div class="divider__line"></div>
                    </div>
                </div><!-- /.col-sm-3 -->
                <!-- counter item #2 -->
                <div class="col-6 col-sm-3">
                    <div class="counter-item">
                        <h4 class="counter">30</h4>
                        <p class="counter__desc">Nitelikli Çalışanlar ve İşçiler Bizimle</p>
                        <div class="divider__line"></div>
                    </div>
                </div><!-- /.col-sm-3 -->
                <!-- counter item #3 -->
                <div class="col-6 col-sm-3">
                    <div class="counter-item">
                        <h4 class="counter">150</h4>
                        <p class="counter__desc">Bize Güvenen Mutlu Müşteriler</p>
                        <div class="divider__line"></div>
                    </div>
                </div><!-- /.col-sm-3 -->
                <!-- counter item #4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.counters-layout2 -->

    <section class="features-layout1 pt-120 pb-80">
        <div class="bg-img"><img src="{{ asset('assets/front/images/backgrounds/3.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row mb-40">
                <div class="col-12">
                    <h2 class="heading__subtitle color-primary">Yarınınızı bugünden daha farklı hale getirin.</h2>
                </div><!-- /col-12 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h3 class="heading__title color-white">Sürdürülebilir ve Güvenilir Enerji Sistemleriyle Topluma
                        Enerji Verin!</h3>
                </div><!-- /col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading__desc color-gray mb-20">
                        Son yıllarda, PV pazarının büyümesini desteklemek için güneş enerjisi değer zincirinde yeni
                        kapasite gerekli hale geldi. Ancak levha, güneş pili ve güneş modülü üretim tesislerinin
                        kurulması ve büyütülmesi için gereken sermaye oldukça fazladır.
                    </p>
                    <p class="heading__desc color-gray mb-30">Bu faktörler bir araya geldiğinde, küresel güneş enerjisi
                        üreticilerinin sürdürülebilir çalışması ve büyümesi açısından ciddi bir zorluk teşkil
                        ediyor.</p>
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
                                Uzaktaki endüstriyel güneş sistemlerimiz, müşterilerimizin ihtiyaçlarını karşılamak için
                                güvenilir bir şekilde çalışacak şekilde tasarlanmıştır.
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
                                Satış mühendislerimiz, tecrübeye sahiptir ve herhangi bir tam güneş enerjisi sistemi
                                tasarlayabilir.
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

    <section class="banner-layout1 py-0 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="text-block">
                        <div class="banner__text">
                            <p>

                                Güneş enerjisi ürünlerinin verimini ve performansını artırırken, PV sektörü deneyimimiz
                                her adımda derinlemesine malzeme tedariki, finansman ve tedarik zinciri uzmanlığı
                                sunmamıza olanak sağlar.
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

    <section class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h2 class="heading__subtitle color-primary">Önerilerimiz</h2>
                    <h3 class="heading__title">Mono, Multi & Bi-Facial Güneş Pili Ürünleri</h3>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="heading__desc mb-30">Bifacial paneller, her büyüklükteki işletmenin işletme sermayesini
                        korumasına, değer yaratmasına ve büyümeyi hızlandırmasına yardımcı olmak için tasarlanmış esnek
                        toptan güneş enerjisi finansman platformuna uygundur. Güçlü finansman imkanından ve önde gelen
                        uluslararası PV üreticileriyle onlarca yıldır devam eden ortaklıklarımızdan yararlanarak.</p>
                    <p class="heading__desc">Güneş enerjisi distribütörleri veya ticari bankalar tarafından sunulmayan esnek şartlarla desteklenen, özel tedarik zinciri çözümleri oluşturabiliyoruz.</p>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                    <p class="heading__desc mb-30">
                        Ticari, konut ve kamu hizmeti ölçekli projelere uygun olan çift yüzeyli panellerimiz tedarik zinciri yönetimi tarafından desteklenmektedir. Ayrıntılı ürün özellikleri için Güneş Enerjisi Bölümümüze danışın.</p>

                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <ul class="portfolio__meta-list d-flex flex-wrap list-unstyled mt-80 mb-0">
                        <li>
                            <span class="meta__name">Power</span>
                            <span class="meta__desc">5,54 KWp</span>
                        </li>
                        <li>
                            <span class="meta__name">Price</span>
                            <span class="meta__desc">$ 14,600</span>
                        </li>
                        <li>
                            <span class="meta__name">Yearly Output</span>
                            <span class="meta__desc">6,721 KWh</span>
                        </li>
                        <li>
                            <span class="meta__name">Monthly</span>
                            <span class="meta__desc">$ 146</span>
                        </li>
                        <li>
                            <span class="meta__name">Price</span>
                            <span class="meta__desc">$ 14,600</span>
                        </li>
                    </ul><!-- /.portfolio__meta-list -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Text Content -->

    <section class="banner-layout2 pt-130 pb-130">
        <div class="bg-img">
            <img src="{{ asset('assets/front/images/banners/12.jpg') }}" alt="background">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                    <div class="text-block">
                        <div class="slick-carousel"
                             data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "dots": false'>
                            <div class="heading heading-layout2">
                                <h2 class="heading__subtitle">
                                    Nasıl Çalışır, Birinci Adım:</h2>
                                <h3 class="heading__title">Biz tasarlayıp gönderiyoruz.</h3>
                                <p class="heading__desc">Tesisat kullanımınızı ve ihtiyaçlarınızı karşılayan bir sistem tasarlamak ve sunmak için sizinle işbirliği yapıyoruz. Ayrıca endişelenmenize veya paranızdan veya çabanızdan ödün vermenize gerek kalmaması için 66'dan fazla üreticiden ekipman seçiyoruz.</p>
                            </div>
                            <div class="heading heading-layout2">
                                <h2 class="heading__subtitle"> Nasıl Çalışır, İkinci Adım:</h2>
                                <h3 class="heading__title">Sözleşme veya Kurulum</h3>
                                <p class="heading__desc">
                                    Tesisat kullanımınızı ve ihtiyaçlarınızı karşılayan bir sistem tasarlamak ve sunmak için sizinle işbirliği yapıyoruz. Ayrıca endişelenmenize veya paranızdan veya çabanızdan ödün vermenize gerek kalmaması için 66'dan fazla üreticiden ekipman seçiyoruz.
                                </p>
                            </div>
                        </div>
                    </div><!-- /.text-block -->
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->

    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <h2 class="heading__subtitle color-primary">Sonuçlar</h2>
                    <h3 class="heading__title">Mono, Multi & Bi-Facial Güneş Pili Ürünleri</h3>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <p class="heading__desc mb-30">Bifacial paneller, her büyüklükteki işletmenin işletme sermayesini
                        korumasına, değer yaratmasına ve büyümeyi hızlandırmasına yardımcı olmak için tasarlanmış esnek
                        toptan güneş enerjisi finansman platformuna uygundur. Güçlü finansman imkanından ve önde gelen
                        uluslararası PV üreticileriyle onlarca yıldır devam eden ortaklıklarımızdan yararlanarak.</p>
                    <p class="heading__desc">Güneş enerjisi distribütörleri veya ticari bankalar tarafından sunulmayan esnek şartlarla desteklenen, özel tedarik zinciri çözümleri oluşturabiliyoruz.</p>

                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                    <div class="row">
                        <!-- fancybox item #1 -->
                        <div class="col-sm-4">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-biosphere2"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title mb-0">Çevre Duyarlılığı</h4>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-sm-4 -->
                        <!-- fancybox item #2 -->
                        <div class="col-sm-4">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-tube"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title mb-0">Kişiselleştirilmiş Çözümler</h4>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-sm-4 -->
                        <!-- fancybox item #3 -->
                        <div class="col-sm-4">
                            <div class="fancybox-item">
                                <div class="fancybox__icon">
                                    <i class="icon-electric-charge"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox__content">
                                    <h4 class="fancybox__title mb-0">Performans Ölçüleri</h4>
                                </div><!-- /.fancybox-content -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.col-sm-4 -->
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Text Content -->
    @if($projects->count() > 0)
    <section class="portfolio-grid pt-50 pb-50 border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <h2 class="heading__title fz-25">Diğer Projelerimiz</h2>
                    </div><!-- /heading -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                @foreach($projects as $p)
                <!-- portfolio item #1 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio__img">
                            <img src="{{ asset($p->image) }}" alt="portfolio img">
                        </div><!-- /.portfolio-img -->
                        <div class="portfolio__body">
                            <h4 class="portfolio__title"><a href="{{ route('project.detail', ['slug' => $p->slug]) }}">{{ $p->title }}</a></h4>

                        </div><!-- /.portfolio-content -->
                    </div><!-- /.portfolio-item -->
                </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row-->
        </div><!-- /.container -->
    </section><!-- /.portfolio Grid -->
    @endif
@endsection
