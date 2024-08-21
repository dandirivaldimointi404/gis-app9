<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users." />
    <meta name="author" content="Inovatik" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Kota Timur</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet" />
    <link href="{{ asset('assets_landing/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_landing/css/fontawesome-all.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_landing/css/swiper.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_landing/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_landing/css/styles.css') }}" rel="stylesheet" />

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png" />
</head>

<body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    @include('layouts.landing.navbar')



    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('assets_landing/images/logokotatimur.png') }}"
                                        alt="alternative" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('assets_landing/images/121.png') }}"
                                        alt="alternative" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('assets_landing/images/alur.png') }}"
                                        alt="alternative" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('assets_landing/images/unisannn.png') }}"
                                        alt="alternative" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('assets_landing/images/bps.svg') }}"
                                        alt="alternative" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('assets_landing/images/prov.png') }}"
                                        alt="alternative" />
                                </div>
                            </div>
                            <!-- end of swiper-wrapper -->
                        </div>
                        <!-- end of swiper container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of image slider -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of customers -->


    @yield('content')

    @include('layouts.landing.footer')

    <!-- Scripts -->
    <script src="{{ asset('assets_landing/js/jquery.min.js') }}"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('assets_landing/js/popper.min.js') }}"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('assets_landing/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap framework -->
    <script src="{{ asset('assets_landing/js/jquery.easing.min.js') }}"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('assets_landing/js/swiper.min.js') }}"></script>
    <!-- Swiper for image and text sliders -->
    <script src="{{ asset('assets_landing/js/jquery.magnific-popup.js') }}"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('assets_landing/js/validator.min.js') }}"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{ asset('assets_landing/js/scripts.js') }}"></script>
    <!-- Custom scripts -->
</body>

</html>
