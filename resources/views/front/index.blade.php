@extends('front.layouts.app')
@section('title', ' - Anasayfa')
@section('meta_desciption', !is_null($_siteSetting->meta_description ? $_siteSetting->meta_description : '' ) )
@section('meta_keywords', !is_null($_siteSetting->meta_keywords ? $_siteSetting->meta_keywords : '' ) )
@section('content')

    Hero Area
    ==============================-->
    <section class="  ">
        <div class="vs-hero-carousel" data-height="800" data-container="1900" data-slidertype="responsive">
            <!-- Slide 1-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
                <img width="1920" height="807" src="{{ asset('assets/front/img/hero/hero-bg-1-1.jpg') }}" class="ls-bg" alt="hero-bg">
                <div style="text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; left:315px; top:710px; line-height:0px; z-index:200;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="static:forever;">
                    <div class="d-none d-xxl-block">
                        <button class="ls-custom-dot ls-dots1"><span class="ls-dot-number">1.</span><span class="ls-dot-shape"></span></button>
                        <button class="ls-custom-dot ls-dots1"><span class="ls-dot-number">2.</span><span class="ls-dot-shape"></span></button>
                        <button class="ls-custom-dot ls-dots1"><span class="ls-dot-number">3.</span><span class="ls-dot-shape"></span></button>
                    </div>
                </div>
                <ls-layer style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:1490px; top:700px; z-index:200;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="static:forever;">
                    <div class="d-none d-xxl-block">
                        <button data-change-slide="prev" class="icon-btn ls-custom-arrow style3"><i class="fas fa-chevron-left"></i></button>
                        <button data-change-slide="next" class="icon-btn ls-custom-arrow style3"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </ls-layer>
                <ls-layer style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:1710px; top:50%; z-index:200;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="static:forever;">
                    <div>
                        <button data-change-slide="prev" class="icon-btn ls-custom-arrow style3 me-0 d-block mb-2"><i class="fas fa-chevron-left"></i></button>
                        <button data-change-slide="next" class="icon-btn ls-custom-arrow style3"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </ls-layer>
                <img width="691" height="680" src="{{ asset('assets/front/img/hero/hero-shape-1-1.png') }}" class="ls-l ls-img-layer" alt="shape" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:105px; left:947px;" data-ls="delayin:400; easingin:easeOutQuint; parallax:true; parallaxlevel:3;">
                <img width="369" height="629" src="{{ asset('assets/front/img/hero/hero-1-1.png') }}" class="ls-l ls-img-layer" alt="hero img" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:130px; left:1121px;" data-ls="delayin:200; easingin:easeOutQuint; parallax:true; parallaxlevel:6;">
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:312px; top:256px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Renewable Energy
                </h1>
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:312px; top:340px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Solutions that Deliver
                </h1>
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:313px; top:419px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Financial Savings
                </h1>
                <div style="font-size:22px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:315px; top:502px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-80; delayin:900; easingin:easeOutQuint; offsetxout:-80; durationout:1500; easingout:easeOutQuint;">Provide Solar Panels And Renewable Energy Products.</div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:315px; top:570px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:550px; top:576px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn d-none d-xxl-block">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:646px; top:576px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn d-block d-xxl-none">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:237px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Renewable Energy
                </h1>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:350px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Solutions that Deliver
                </h1>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:451px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Financial Savings
                </h1>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:588px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:104px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:84px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Renewable Energy
                </h1>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:220px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Solutions that Deliver
                </h1>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:345px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Financial Savings
                </h1>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:517px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
            </div>


            <!-- Slide 2-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
                <img width="1920" height="890" src="assets/img/hero/hero-bg-2-2.jpg" class="ls-bg" alt="hero bg">
                <img width="691" height="680" src="assets/img/hero/hero-shape-1-1.png" class="ls-l ls-img-layer" alt="shape" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:105px; left:947px;" data-ls="delayin:400; easingin:easeOutQuint; parallax:true; parallaxlevel:3;">
                <img width="370" height="412" src="assets/img/hero/hero-1-4.png" class="ls-l ls-img-layer" alt="hero bg" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:155px; left:1116px; width:440px; height:490px;" data-ls="delayin:200; easingin:easeOutQuint; parallax:true; parallaxlevel:6;">
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:312px; top:256px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Investing in Clean
                </h1>
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:312px; top:340px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Energy Generation
                </h1>
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:313px; top:419px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    With Solar System
                </h1>
                <div style="font-size:22px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:315px; top:502px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-80; delayin:900; easingin:easeOutQuint; offsetxout:-80; durationout:1500; easingout:easeOutQuint;">Provide Solar Panels And Renewable Energy Products.</div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:315px; top:570px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:550px; top:576px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn d-none d-xxl-block">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:646px; top:576px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn d-block d-xxl-none">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:237px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Investing in Clean
                </h1>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:350px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Energy Generation
                </h1>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:451px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    With Solar System
                </h1>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:588px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:104px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:84px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Investing in Clean
                </h1>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:220px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Energy Generation
                </h1>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:345px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    With Solar System
                </h1>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:517px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
            </div>


            <!-- Slide 3-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnsscale:1.2;">
                <img width="1920" height="890" src="{{ asset('assets/front/img/hero/hero-bg-2-3.jpg') }}" class="ls-bg" alt="hero bg">
                <img width="691" height="680" src="{{ asset('assets/front/img/hero/hero-shape-1-1.png') }}" class="ls-l ls-img-layer" alt="shape" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:105px; left:947px;" data-ls="delayin:400; easingin:easeOutQuint; parallax:true; parallaxlevel:3;">
                <img width="631" height="631" src="{{ asset('assets/front/img/hero/hero-1-2.png') }}" class="ls-l ls-img-layer" alt="" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:100px; left:1000px;" data-ls="delayin:200; easingin:easeOutQuint; parallax:true; parallaxlevel:6;">
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:312px; top:265px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Environment Friendly
                </h1>
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:313px; top:337px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Energy Plantation
                </h1>
                <h1 style="font-size:60px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:313px; top:413px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    To Your Smart Home
                </h1>
                <div style="font-size:22px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:315px; top:502px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-80; delayin:900; easingin:easeOutQuint; offsetxout:-80; durationout:1500; easingout:easeOutQuint;">Provide Solar Panels And Renewable Energy Products.</div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:315px; top:570px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:550px; top:576px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn d-none d-xxl-block">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:646px; top:576px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn d-block d-xxl-none">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:237px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Environment Friendly
                </h1>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:350px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Energy Plantation
                </h1>
                <h1 style="font-size:80px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:150px; top:451px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    To Your Smart Home
                </h1>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:588px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:150px; top:104px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:200; delayin:1300; easingin:easeOutQuint; offsetxout:200; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                    <div class="watch-btn">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-icon popup-video"><i class="fas fa-play"></i></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="btn-text popup-video">Watch Video</a>
                    </div>
                </div>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:84px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Environment Friendly
                </h1>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:220px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    Energy Plantation
                </h1>
                <h1 style="font-size:90px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; background-position:0% 0%; background-repeat:no-repeat; color:#ffffff; font-family:Epilogue; left:100px; top:345px; letter-spacing:-0.5px; font-weight:700;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-100; durationin:1500; delayin:600; easingin:easeOutQuint; offsetxout:-100; durationout:1500;">
                    To Your Smart Home
                </h1>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; left:100px; top:517px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetxin:-100; delayin:1100; easingin:easeOutQuint;"><a href="contact.html" class="vs-btn">Enquire Online</a></div>
            </div>
        </div>
    </section>
    <!--==============================
    About Us
    ==============================-->
    <section class=" space">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-9 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="title-area">
                        <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                            <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1" transform="translate(-926 -1158)"></path>
                        </svg>
                        <span class="sec-subtitle">PROJECTS SUPPLIER AND INSTALLER</span>
                        <h2 class="sec-title h1">Professional Successful Renewable Energy Storage Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-xl-7 mb-40 mb-xl-0 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="img-box6">
                        <div class="img-1"><img src="{{ asset('assets/front/img/about/about-1-1.jpg') }}" alt="about"></div>
                        <div class="img-2"><img src="{{ asset('assets/front/img/about/about-1-2.jpg') }}" alt="about"></div>
                        <div class="img-shape1"></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
                <div class="col-xl-5 align-self-center text-center text-xl-start wow fadeInUp" data-wow-delay="0.5s">
                    <p class="pe-xxl-5 fs-md mb-xxl-4 pb-xl-2 mt-n1">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit. Aenea ifendn auctor wisi et ur na. Aliquam er at volutpat. Duis ac tuifendrpis. Ut tu ellus dolor, dapibus eget, elementum vel, curifende suseleifend.</p>
                    <h3 class="h4 mb-1">Thomas Marker</h3>
                    <p class="text-title fs-xs mb-4">Director of Manufacturing facilities company</p>
                    <img src="{{ asset('assets/front/img/about/sign.png') }}" alt="sign">
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    About Us
    ==============================-->
    <div class=" space-bottom">
        <div class="container">
            <div class="row gx-80 mb-1 pb-3 text-center text-xl-start justify-content-center justify-content-xl-start">
                <div class="col-md-4 col-lg-3 col-xxl-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-style1">
                        <span class="counter-number h1">130, 540</span>
                        <p class="counter-text">Tonnes CO2 emissions <br> avoided</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xxl-auto wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-style1">
                        <span class="counter-number h1">150,041</span>
                        <p class="counter-text">Domestic households <br> served each year</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-xxl-auto wow fadeInUp" data-wow-delay="0.5s">
                    <div class="counter-style1">
                        <span class="counter-number h1">2,840</span>
                        <p class="counter-text">Acres of land protected <br> by solar parks</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xl-7 mb-40 mb-lg-0">
                    <div class="img-box1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="img-1">
                            <img src="{{ asset('assets/front/img/about/ab-2-1.png') }}" alt="about">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video position-center"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="shape-dotted jump-reverse"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 align-self-center offset-xl-1 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="list-style1">
                        <ul class="list-unstyled">
                            <li>Satisfaction Value For Money Solution</li>
                            <li>Business Accounting Management</li>
                            <li>Inventory Management Tracking System</li>
                            <li>The world as it is heavily dependent</li>
                            <li>Reliability and performance</li>
                        </ul>
                    </div>
                    <a href="about.html" class="vs-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="bg-light-1 space">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                    <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1" transform="translate(-926 -1158)"></path>
                </svg>
                <span class="sec-subtitle">WHAT WE OFFER</span>
                <h2 class="sec-title h1">Professional Services</h2>
            </div>
            <div class="row gx-0 vs-carousel service-slide1 wow fadeInUp" data-wow-delay="0.4s" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-dots="true" data-center-mode="true" data-ml-center-mode="true" data-xl-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true">
                <div class="col-xl-3">
                    <div class="service-style1">
                        <div class="service-img"><img src="{{ asset('assets/front/img/service/sr-1-1.png') }}" alt="service thumbnail"></div>
                        <div class="service-icon"><img src="{{ asset('assets/front/img/icon/sr-1-1.png') }}" alt="icon"></div>
                        <h3 class="service-title h5"><a class="text-inherit" href="service-details.html">Hydropower Plants Services</a></h3>
                        <p class="service-text">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit. </p>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="service-style1">
                        <div class="service-img"><img src="{{ asset('assets/front/img/service/sr-1-2.png') }}" alt="service thumbnail"></div>
                        <div class="service-icon"><img src="{{ asset('assets/front/img/icon/sr-1-2.png') }}" alt="icon"></div>
                        <h3 class="service-title h5"><a class="text-inherit" href="service-details.html">Solar Panels Services</a></h3>
                        <p class="service-text">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit. </p>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="service-style1">
                        <div class="service-img"><img src="{{ asset('assets/front/img/service/sr-1-3.png') }}" alt="service thumbnail"></div>
                        <div class="service-icon"><img src="{{ asset('assets/front/img/icon/sr-1-3.png') }}" alt="icon"></div>
                        <h3 class="service-title h5"><a class="text-inherit" href="service-details.html">Battery Materials Services</a></h3>
                        <p class="service-text">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit. </p>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="service-style1">
                        <div class="service-img"><img src="{{ asset('assets/front/img/service/sr-1-4.png') }}" alt="service thumbnail"></div>
                        <div class="service-icon"><img src="{{ asset('assets/front/img/icon/sr-1-4.png') }}" alt="icon"></div>
                        <h3 class="service-title h5"><a class="text-inherit" href="service-details.html">Fossil Resources Services</a></h3>
                        <p class="service-text">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit. </p>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="service-style1">
                        <div class="service-img"><img src="{{ asset('assets/front/img/service/sr-1-5.png') }}" alt="service thumbnail"></div>
                        <div class="service-icon"><img src="{{ asset('assets/front/img/icon/sr-1-5.png') }}" alt="icon"></div>
                        <h3 class="service-title h5"><a class="text-inherit" href="service-details.html">Natural Power Planset</a></h3>
                        <p class="service-text">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit. </p>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Why Choose Us
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="title-area">
                        <span class="sec-subtitle">Why you choose us</span>
                        <h2 class="sec-title h1">Award-winning renewable energy solutions</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="progress-box">
                                <h3 class="progress-box__title">Wind Turbines</h3>
                                <span class="progress-box__number">85%</span>
                                <div class="progress-box__progress">
                                    <div class="progress-box__bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h3 class="progress-box__title">Hybrid Energy</h3>
                                <span class="progress-box__number">62%</span>
                                <div class="progress-box__progress">
                                    <div class="progress-box__bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3"></div>
                    <div class="img-box2">
                        <div class="img-1"><img src="{{ asset('assets/front/img/about/why-choose-1.jpg') }}" alt="thumb"></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <p class="fs-md mb-5 pe-xxl-5 mt-n1">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus el ifen elit. Aenea ifendn auctor wisi et ur na. Aliquam er at volifenutpat tuifendrpis. Ut tuellus dolor, dapibus eget, dolor, dapibus eifeng et, elementum vel,</p>
                    <div class="vs-media about-media ">
                        <div class="media-icon"><img src="{{ asset('assets/front/img/icon/why-choose-1.png') }}" alt="feature icon"></div>
                        <div class="media-body">
                            <span class="media-title h5">Award winning team</span>
                            <p class="media-info">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit.</p>
                        </div>
                    </div>
                    <div class="vs-media about-media ">
                        <div class="media-icon"><img src="{{ asset('assets/front/img/icon/why-choose-2.png') }}" alt="feature icon"></div>
                        <div class="media-body">
                            <span class="media-title h5">Money Back Guarantee</span>
                            <p class="media-info">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit.</p>
                        </div>
                    </div>
                    <div class="vs-media about-media ">
                        <div class="media-icon"><img src="{{ asset('assets/front/img/icon/why-choose-3.png') }}" alt="feature icon"></div>
                        <div class="media-body">
                            <span class="media-title h5">Easy Installation</span>
                            <p class="media-info">Ut tellus dolor, dapibus eget, elementum vel, ifend cursus eleifend, elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Call To Action Area
    ==============================-->
    <section class="  ">
        <div class="container text-center text-xl-start  wow fadeInUp" data-wow-delay="0.3s">
            <div class="cta-box1">
                <div class="shape-dotted jump-reverse"></div>
                <div class="row">
                    <div class="col-xl-7 col-xxl-8 mb-30 mb-xl-0">
                        <span class="sec-subtitle">ARE YOU LOOKING FOR AN INSTALLER</span>
                        <h2 class="sec-title">We are a Global Solar Panel Pump and Street light installer</h2>
                        <a href="contact.html" class="vs-btn">Contact Us</a>
                        <p class="cta-number"><img src="{{ asset('assets/front/img/icon/info-1-2.png') }}" alt="about"> hotline: <a href="+11234562228" class="text-reset">( +1 123 456 2228 )</a></p>
                    </div>
                    <div class="col-xl col-xxl">
                        <div class="cta-img1">
                            <img src="{{ asset('assets/front/img/cta/cta-1-1.png') }}" alt="cta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Package Area
    ==============================-->
    <section class=" space">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                    <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1" transform="translate(-926 -1158)"></path>
                </svg>
                <span class="sec-subtitle">PRICING PLAN FOR YOU</span>
                <h2 class="sec-title h1">Pricing Packages</h2>
            </div>
            <div class="row vs-carousel price-slide1 wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true" data-sm-center-mode="true">
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img" data-bg-src="{{ asset('assets/front/img/price/price-img-1-1.jpg') }}" data-overlay></div>
                            <div class="package-icon"><img src="{{ asset('assets/front/img/icon/price-1-1.png') }}" alt="price icon"></div>
                            <h3 class="package-name h4">Solar Panel</h3>
                            <p class="package-text">Black Panels + 5.12kWhStorage</p>
                            <p class="package-price h1"><span class="currency">$</span>2,100</p>
                        </div>
                        <div class="package-body">
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-check"></i>25 Years Warranty</li>
                                    <li><i class="far fa-check"></i>Fully scalable system.</li>
                                    <li><i class="far fa-check"></i>Installation</li>
                                    <li><i class="far fa-check"></i>Repair & Replacement</li>
                                    <li><i class="far fa-check"></i>Skilled Support</li>
                                </ul>
                            </div>
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123 456 2228</a></p>
                            <a href="contact.html" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img" data-bg-src="{{ asset('assets/front/img/price/price-img-1-2.png') }}" data-overlay></div>
                            <div class="package-icon"><img src="{{ asset('assets/front/img/icon/price-1-2.png') }}" alt="price icon"></div>
                            <h3 class="package-name h4">Windmill</h3>
                            <p class="package-text">Black Panels + 5.12kWhStorage</p>
                            <p class="package-price h1"><span class="currency">$</span>2,900</p>
                        </div>
                        <div class="package-body">
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-check"></i>30 Years Warranty</li>
                                    <li><i class="far fa-check"></i>Fully scalable system.</li>
                                    <li><i class="far fa-check"></i>Installation</li>
                                    <li><i class="far fa-check"></i>Repair & Replacement</li>
                                    <li><i class="far fa-check"></i>Skilled Support</li>
                                </ul>
                            </div>
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123 456 2228</a></p>
                            <a href="contact.html" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img" data-bg-src="{{ asset('assets/front/img/price/price-img-1-3.png') }}" data-overlay></div>
                            <div class="package-icon"><img src="{{ asset('assets/front/img/icon/price-1-4.png') }}" alt="price icon"></div>
                            <h3 class="package-name h4">Global Energy</h3>
                            <p class="package-text">Black Panels + 5.12kWhStorage</p>
                            <p class="package-price h1"><span class="currency">$</span>3,200</p>
                        </div>
                        <div class="package-body">
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-check"></i>35 Years Warranty</li>
                                    <li><i class="far fa-check"></i>Fully scalable system.</li>
                                    <li><i class="far fa-check"></i>Installation</li>
                                    <li><i class="far fa-check"></i>Repair & Replacement</li>
                                    <li><i class="far fa-check"></i>Skilled Support</li>
                                </ul>
                            </div>
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123 456 2228</a></p>
                            <a href="contact.html" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="package-style1">
                        <div class="package-head">
                            <div class="package-img" data-bg-src="{{ asset('assets/front/img/price/price-img-1-4.png') }}" data-overlay></div>
                            <div class="package-icon"><img src="{{ asset('assets/front/img/icon/price-1-3.png') }}" alt="price icon"></div>
                            <h3 class="package-name h4">Fossil Service</h3>
                            <p class="package-text">Black Panels + 5.12kWhStorage</p>
                            <p class="package-price h1"><span class="currency">$</span>4,100</p>
                        </div>
                        <div class="package-body">
                            <div class="package-list">
                                <ul class="list-unstyled">
                                    <li><i class="far fa-check"></i>50 Years Warranty</li>
                                    <li><i class="far fa-check"></i>Fully scalable system.</li>
                                    <li><i class="far fa-check"></i>Installation</li>
                                    <li><i class="far fa-check"></i>Repair & Replacement</li>
                                    <li><i class="far fa-check"></i>Skilled Support</li>
                                </ul>
                            </div>
                            <p class="package-number">We’ll even pay for your call: <a href="tel:+11234562228">+1 123 456 2228</a></p>
                            <a href="contact.html" class="vs-btn style2">Select a Plan</a>
                        </div>
                        <div class="shape-dotted"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Project Area
    ==============================-->
    <section class="bg-light-1 space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">OUR CASE STUDIES</span>
                        <h2 class="sec-title h1">Over 14,000 Successful Installations</h2>
                    </div>
                </div>
                <div class="col-auto align-self-center">
                    <div class="sec-btns">
                        <a href="project.html" class="vs-btn">All Case Studies</a>
                    </div>
                </div>
            </div>
            <div class="row project-slide1 vs-carousel gx-45" data-slide-show="3" data-variable-width="true" data-arrows="true">
                <div class="col-auto">
                    <div class="project-style1 layout2">
                        <div class="project-img"><a href="project-details.html"><img src="{{ asset('assets/front/img/project/proj-1-1.jpg') }}" alt="project image"></a></div>
                        <div class="project-content">
                            <span class="project-category">SOLAR ENERGY</span>
                            <h3 class="project-title h4"><a href="project-details.html" class="text-inherit">Streamer fish California halibut Pacific</a></h3>
                            <span class="project-energytotal h4">235,099 <span class="quantity">kWh</span></span>
                            <p class="project-energytext">of clean energy per year</p>
                            <div class="shape-dotted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="project-style1 layout2">
                        <div class="project-img"><a href="project-details.html"><img src="{{ asset('assets/front/img/project/proj-1-2.jpg') }}" alt="project image"></a></div>
                        <div class="project-content">
                            <span class="project-category">Windmill ENERGY</span>
                            <h3 class="project-title h4"><a href="project-details.html" class="text-inherit">Battery Backup to an Existing</a></h3>
                            <span class="project-energytotal h4">178,758 <span class="quantity">kWh</span></span>
                            <p class="project-energytext">of clean energy per year</p>
                            <div class="shape-dotted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="project-style1 layout2">
                        <div class="project-img"><a href="project-details.html"><img src="{{ asset('assets/front/img/project/proj-1-4.jpg') }}" alt="project image"></a></div>
                        <div class="project-content">
                            <span class="project-category">Battery ENERGY</span>
                            <h3 class="project-title h4"><a href="project-details.html" class="text-inherit">Energy free and powerful supply chain set</a></h3>
                            <span class="project-energytotal h4">120,569 <span class="quantity">kWh</span></span>
                            <p class="project-energytext">of clean energy per year</p>
                            <div class="shape-dotted"></div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="project-style1 layout2">
                        <div class="project-img"><a href="project-details.html"><img src="{{ asset('assets/front/img/project/proj-1-3.jpg') }}" alt="project image"></a></div>
                        <div class="project-content">
                            <span class="project-category">Fossil ENERGY</span>
                            <h3 class="project-title h4"><a href="project-details.html" class="text-inherit">Energy free and healthy</a></h3>
                            <span class="project-energytotal h4">350,000 <span class="quantity">kWh</span></span>
                            <p class="project-energytext">of clean energy per year</p>
                            <div class="shape-dotted"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <svg class="sec-icon" width="68" height="67" viewBox="0 0 68 67">
                    <path class="sec-shape" d="M926,1225l63-39-21-1,26-27-58,35,21,1" transform="translate(-926 -1158)"></path>
                </svg>
                <span class="sec-subtitle">BLOG AND UPDATES</span>
                <h2 class="sec-title h1">Recent News</h2>
            </div>
            <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.4s" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">

                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/front/img/blog/blog-1-1.jpg') }}" alt="Blog Image" class="w-100">
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">British Solar Renewables receives planning</a></h3>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html" class="blog-date">January 05, 2022</a>
                                <a href="blog.html"><i class="fal fa-comment-lines"></i>21</a>
                            </div>
                            <p class="blog-text">Ut tellus dolor, dapibus eget, elementum cursus eleifend, elit. Aenea ifendn aucto na. Aliquam er at volutpat.</p>
                            <a href="blog-details.html" class="link-btn">Read More<i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/front/img/blog/blog-1-2.jpg') }}" alt="Blog Image" class="w-100">
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Surviving Sustainably On Solar Energy 2022</a></h3>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html" class="blog-date">Augest 10, 2022</a>
                                <a href="blog.html"><i class="fal fa-comment-lines"></i>36</a>
                            </div>
                            <p class="blog-text">Ut tellus dolor, dapibus eget, elementum cursus eleifend, elit. Aenea ifendn aucto na. Aliquam er at volutpat.</p>
                            <a href="blog-details.html" class="link-btn">Read More<i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/front/img/blog/blog-1-3.jpg') }}" alt="Blog Image" class="w-100">
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Specialists and Planning Authorities to Develop</a></h3>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html" class="blog-date">November 28, 2022</a>
                                <a href="blog.html"><i class="fal fa-comment-lines"></i>89</a>
                            </div>
                            <p class="blog-text">Ut tellus dolor, dapibus eget, elementum cursus eleifend, elit. Aenea ifendn aucto na. Aliquam er at volutpat.</p>
                            <a href="blog-details.html" class="link-btn">Read More<i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('assets/front/img/blog/blog-1-4.jpg') }}" alt="Blog Image" class="w-100">
                        </div>
                        <h3 class="blog-title"><a href="blog-details.html">Streamer fish California halibut Pacific Ocan</a></h3>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html" class="blog-date">December 15, 2022</a>
                                <a href="blog.html"><i class="fal fa-comment-lines"></i>42</a>
                            </div>
                            <p class="blog-text">Ut tellus dolor, dapibus eget, elementum cursus eleifend, elit. Aenea ifendn aucto na. Aliquam er at volutpat.</p>
                            <a href="blog-details.html" class="link-btn">Read More<i class="far fa-plus"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bottom-btn">
                <a href="blog.html" class="vs-btn">View All News</a>
            </div>
        </div>
    </section>
    <!--==============================
    Brand Area
    ==============================-->
    <section class=" space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5 col-xxl-4 align-self-center mb-40 mb-xl-0 text-center text-xl-start wow fadeInUp" data-wow-delay="0.3s">
                    <span class="sec-subtitle">CLIENT AND SPONSOR</span>
                    <h2 class="sec-title mb-n2">Building Strong, Long Lasting Relationships</h2>
                </div>
                <div class="col-xl-7 offset-xxl-1 z-index-common wow fadeInUp" data-wow-delay="0.4s">
                    <div class="brand-wrap1">
                        <div class="shape-dotted jump"></div>
                        <div class="row gx-0">
                            <div class="col-md-6 col-lg-4">
                                <div class="brand-style1">
                                    <img src="{{ asset('assets/front/img/brand/brand-1-1.png') }}" alt="brand">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="brand-style1">
                                    <img src="{{ asset('assets/front/img/brand/brand-1-2.png') }}" alt="brand">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="brand-style1">
                                    <img src="{{ asset('assets/front/img/brand/brand-1-3.png') }}" alt="brand">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="brand-style1">
                                    <img src="{{ asset('assets/front/img/brand/brand-1-4.png') }}" alt="brand">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="brand-style1">
                                    <img src="{{ asset('assets/front/img/brand/brand-1-5.png') }}" alt="brand">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="brand-style1">
                                    <img src="{{ asset('assets/front/img/brand/brand-1-6.png') }}" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Subscribe Area
    ==============================-->
    <section class="bg-theme overflow-hidden  ">
        <div class="container">
            <div class="row gx-0 text-center text-lg-start">
                <div class="col-lg col-xl-7 ">
                    <form action="#" class="form-style1">
                        <h2 class="form-title">Subscribe to our newsletter.</h2>
                        <div class="form-group">
                            <input type="text" placeholder="Enter your email address....">
                            <button class="vs-btn">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-auto col-xl">
                    <div class="social-box">
                        <h3 class="social-box__title">Get in Touch</h3>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================

@endsection
