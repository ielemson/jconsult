@php
    $setting = \App\Models\Setting::find(1);
@endphp

<div class="tgmobile__menu">
    <nav class="tgmobile__menu-box">
        <div class="close-btn"><i class="fas fa-times"></i></div>
        <div class="nav-logo">
            <a href='{{ url("/") }}'><img src="{{ asset("images/settings/$setting->website_logo_dark") }}" alt="Logo"></a>
        </div>
        <div class="tgmobile__search">
            <form action="#">
                <input type="text" placeholder="Search here...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="tgmobile__menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="tgmobile__menu-bottom">
            <div class="contact-info">
                <ul class="list-wrap">
                    <li><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                    <li><a href="tel:{{ $setting->email }}">{{ $setting->phone }}</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="list-wrap">
                    <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a></li>
                    {{-- <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li> --}}
                    {{-- <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>