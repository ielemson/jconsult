@php
    $setting = \App\Models\Setting::find(1);
@endphp

@extends("layouts.app",["title"=>"About Us"])

@section("content")
    @include("partials.page-navbar")

    <main class="fix">
        <!-- breadcrumb-area -->
    @include("partials.bread-crumb", ["header_1"=>"About Us","header_2"=>"About"])
        <!-- breadcrumb-area-end -->
        <!-- about-area -->
        <section class="about__area-three about__bg-two" data-background="{{ asset("assets/img/bg/h3_about_bg.jpg") }}">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about__img-wrap-three">
                            <img src="assets/img/images/h3_about_img01.jpg" alt="">
                            {{-- <img src="assets/img/images/h3_about_img02.jpg" alt="" data-parallax='{"x" : 50 }'> --}}
                            <div class="shape">
                                <img src="assets/img/images/h3_about_img_shape.png" alt="" class="alltuchtopdown">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section-title mb-25">
                                <span class="sub-title">About Our Company</span>
                                <h2 class="title">Providing Expert Advice On Business Consulting, Planning & Success</h2>
                            </div>
                            <p>Mauris ut enim sit amet lacus ornare ullamcorper. Praesent plaacerat neque eu purus rhoncus, vel tincidunt odio ultrices. Seed theya are feugiat elis Curabitur posuere tristique.</p>
                          
                            <div class="about__shape-wrap-three">
                                <img src="assets/img/images/h3_about_shape01.png" alt="" class="rotateme">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- request-area -->
        <section class="request__area-two">
            <div class="request__bg-two" data-background="assets/img/bg/h2_request_bg.jpg"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="request__content-two">
                            <h2 class="title">Offering The Best <span>Experience Of</span> Finance Services</h2>
                            <div class="request__phone">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    <span>Toll Free Call</span>
                                    <a href="tel:0123456789">+ 88 ( 9600 ) 6002</a>
                                </div>
                            </div>
                            <a href="tel:0123456789" class="btn">Request a Free Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call-back-area -->
       @include("partials.callback")
        <!-- call-back-area-end -->
    </main>
    <!-- main-area-end -->
    @include("partials.footer")
@endsection

