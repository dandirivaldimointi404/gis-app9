@extends('layouts.pwa.masterpwa')

@section('content')
    <div class="content-area">

        <div class="pagehead-bg   primary-bg">
        </div>

        <div class="container has-pagehead is-pagetitle">
            <div class="section">
                <h5 class="pagetitle">Dashboard</h5>
            </div>
        </div>

        <div class="container over p0 z-depth-1 mb0 overhide">
            <div class="section pt0 pb0">
                <div class="carousel carousel-fullscreen carousel-slider home_carousel carousel-dashboard-home">
                    <a class="carousel-item" href="#carousel-slide-0!">
                        <div class="bg"
                            style="background-image: url('{{ asset('assets_pwa/assets/images/home-slider-2.jpg') }}');">
                        </div>
                        <div class="item-content center-align white-text">
                            <div class="spacer-large"></div>
                            <h3>Ensign has tons of prebuilt UI elements</h3>
                            <h5 class="light white-text">World Class Facilities</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section">
                <div class="spacer"></div>
                <h5 class="center sec-tit">Our Mission</h5>
                <p class="center-align">Mobile applications often stand in contrast to desktop applications which run on
                    desktop computers, and with web applications which run in mobile web browsers rather than directly on
                    the mobile device.</p>
                <div class="center-align">
                    <a href="#!" class="btn btn-rounded">Know More</a>
                </div>
                <div class="spacer-large"></div>
            </div>
        </div>

        <div class="container">
            <div class="section">

                <div class="spacer"></div>

                <div class="slider slider3 testi-boxed testi-overlay z-depth-1 white-text primary-bg ">
                    <ul class="slides transparent testimonials center">
                        <li>
                            <div class="center-align">
                                <div class="row userinfo">
                                    <img src="{{ asset('assets_pwa/assets/images/user-15.jpg') }}" alt="image"
                                        class="circle responsive-img">
                                    <div class="center-align">
                                        <span class="name"><strong>Humbert Dom</strong>
                                            <br><span class='small position'>CEO, Ink Ltd.</span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class='prod-rating'><i class='mdi mdi-star colored'></i><i
                                    class='mdi mdi-star colored'></i><i class='mdi mdi-star colored'></i><i
                                    class='mdi mdi-star colored'></i><i class='mdi mdi-star colored'></i></div>
                            <p class="center"><i class="mdi mdi-format-quote-open"></i>We are so pleased with the purchase
                                of this product. It has tons of components and features to deal with. You can really create
                                anything you like.<i class="mdi mdi-format-quote-close"></i></p>

                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="spacer"></div>


        <div class="backtotop">
            <a class="btn-floating btn primary-bg">
                <i class="mdi mdi-chevron-up"></i>
            </a>
        </div>
    </div>
@endsection
