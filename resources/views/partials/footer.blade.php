@php
    $setting = \App\Models\Setting::find(1);
@endphp

<footer>
    <div class="footer__area-two mt-2">
   
        <div class="footer__top-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="footer-widget">
                            <div class="footer__content-two">
                                <div class="fw-logo mb-25">
                                    <a href='index.html'><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt=""></a>
                                </div>
                                <p>{{ $setting->about}}</p>
                                <div class="footer-info-list footer-info-two">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="content">
                                                <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-pin"></i>
                                            </div>
                                            <div class="content">
                                                <p>{{ $setting->address }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Information</h4>
                            <div class="footer-link-list">
                                <ul class="list-wrap">
                                    <li><a href='about.html'>Information</a></li>
                                    <li><a href='about.html'>About us</a></li>
                                    <li><a href='team.html'>Meet our team</a></li>
                                    <li><a href='contact'>Case stories</a></li>
                                    <li><a href='blog.html'>Latest news</a></li>
                                    <li><a href='contact'>Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Top Links</h4>
                            <div class="footer-link-list">
                                <ul class="list-wrap">
                                    <li><a href='about.html'>How it’s Work</a></li>
                                    <li><a href='contact'>Partners</a></li>
                                    <li><a href='contact'>Testimonials</a></li>
                                    <li><a href='contact'>Case Studies</a></li>
                                    <li><a href='contact'>Pricing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Instagram Posts</h4>
                            <div class="footer-instagram">
                                <ul class="list-wrap">
                                    <li><a href="javascript:void(0)"><img src="assets/img/images/footer_insta01.jpg" alt=""></a></li>
                                    <li><a href="javascript:void(0)"><img src="assets/img/images/footer_insta02.jpg" alt=""></a></li>
                                    <li><a href="javascript:void(0)"><img src="assets/img/images/footer_insta03.jpg" alt=""></a></li>
                                    <li><a href="javascript:void(0)"><img src="assets/img/images/footer_insta04.jpg" alt=""></a></li>
                                    <li><a href="javascript:void(0)"><img src="assets/img/images/footer_insta05.jpg" alt=""></a></li>
                                    <li><a href="javascript:void(0)"><img src="assets/img/images/footer_insta06.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text-two">
                            <p>Copyright © <a href='index.html'>Apexa</a> | All Right Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>