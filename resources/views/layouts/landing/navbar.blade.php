    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-sm-2">
                    <a class="navbar-brand logo-image" href="index.html">
                        <img src="{{ asset('assets_landing/images/logokotatimur.png') }}"
                            style="width: 40px; height:auto;" />
                    </a>
                </div>
                <div class="col-sm-10">
                    <p style="margin: 0; color: white; font-weight: bold;">Kecamatan Kota Timur</p>
                    <p style="margin: 0; color: white; font-weight: bold;">Melayani Dengan Sepenuh Hati</p>
                </div>

            </div>


            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('lsebaran.index') }}">SEBARAN</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="#details">PRAVALENSI</a>
                    </li> --}}
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="/loginadmin">LOG IN</a>
                </span>
            </div>
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Sistem Informasi Geografis!</h1>
                            <p class="p-large">Lihat Data Pertumbuhan Penduduk Diwilayah Kecamatan Kota Timur
                            </p>
                            {{-- <a class="btn-solid-lg page-scroll" href="sign-up.html">SIGN UP</a> --}}
                        </div>
                        <!-- end of text-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="{{ asset('assets_landing/images/12.png') }}"
                                    alt="alternative" />
                            </div>
                            <!-- end of img-wrapper -->
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of header-content -->
    </header>
    <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        viewBox="0 0 1920 310">
        <defs>
            <style>
                .cls-1 {
                    fill: #97ec0d;
                }
            </style>
        </defs>
        <title>header-frame</title>
        <path class="cls-1"
            d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z" />
    </svg>
    <!-- end of header -->
