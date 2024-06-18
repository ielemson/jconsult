<section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb__content">
                    <h2 class="title">{{ $header_1 ?? "" }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href='{{ url("/") }}'>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $header_2 ?? "" }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape">
        <img src="assets/img/images/breadcrumb_shape01.png" alt="">
        <img src="assets/img/images/breadcrumb_shape02.png" alt="" class="rightToLeft">
        <img src="assets/img/images/breadcrumb_shape03.png" alt="">
        <img src="assets/img/images/breadcrumb_shape04.png" alt="">
        <img src="assets/img/images/breadcrumb_shape05.png" alt="" class="alltuchtopdown">
    </div>
</section>