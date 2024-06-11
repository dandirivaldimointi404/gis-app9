<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Sebaran</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link href="{{ asset('assets_landing/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_landing/css/styles.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('assets_landing/images/favicon.png') }}">
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
                        <a class="nav-link page-scroll" href="/">HOME <span class="sr-only">(current)</span></a>
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

    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Sebaran Pertumbuhan Penduduk</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <!-- Privacy Content -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 mb-10 mt-2">
                    <div class="cards-1 mt-2">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <div class="media-body">
                                    <h5 class="mb-0">Sebaran Pertumbuhan</h5>
                                </div>
                            </div>
                            <div id="map" style="height: 450px;"></div>
                        </div>
                    </div>
                </div> <!-- end of image-container-large -->
            </div> <!-- end of col-->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->

    <!-- Footer -->
    <svg class="ex-footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
        viewBox="0 0 1920 79">
        <defs>
            <style>
                .cls-2 {
                    fill: #5f4def;
                }
            </style>
        </defs>
        <title>footer-frame</title>
        <path class="cls-2"
            d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z"
            transform="translate(0 -0.188)" />
    </svg>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>About Tivo</h4>
                        <p class="p-small">We're passionate about offering some of the best business growth services
                            for start more words</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="white"
                                        href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="white" href="terms-conditions.html">Terms
                                        & Conditions</a>, <a class="white" href="privacy-policy.html">Privacy
                                        Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Contact</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">22 Innovative, San Francisco, CA 94043, US</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="white"
                                        href="mailto:contact@Tivo.com">contact@Tivo.com</a> <i
                                        class="fas fa-globe"></i><a class="white" href="#your-link">www.Tivo.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a><br>
                        Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Modal -->
    <div class="modal fade" id="geojsonModal" tabindex="-1" role="dialog" aria-labelledby="geojsonModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="geojsonModalLabel">Informasi Kelurahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <canvas id="kelurahanChart"></canvas>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets_landing/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets_landing/js/validator.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/scripts.js') }}"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([0.5395466, 123.07175], 14);

        L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var kelurahanData = @json($kelurahan);
        var rtData = @json($rt);

        rtData.forEach(function(rt) {
            if (rt.latitude && rt.longitude) {
                var latitude = parseFloat(rt.latitude);
                var longitude = parseFloat(rt.longitude);

                if (!isNaN(latitude) && !isNaN(longitude)) {
                    var marker = L.marker([latitude, longitude]).addTo(map);
                    var popupContent = "<b>" + rt.nama_rt + "</b><br>" +
                        "Total Kelahiran: " + rt.total_kelahiran + "<br>" +
                        "Total Kematian: " + rt.total_kematian;
                    marker.bindPopup(popupContent);
                } else {
                    console.error("Nilai LatLng tidak valid untuk rt: ", rt);
                }
            } else {
                console.error("Objek LatLng tidak valid untuk rt: ", rt);
            }
        });



        var kelurahanChart;

        function destroyChart() {
            if (kelurahanChart) {
                kelurahanChart.destroy();
            }
        }

        kelurahanData.forEach(function(kelurahan) {
            if (kelurahan.geojson) {
                var geojsonUrl = kelurahan.geojson;
                $.getJSON(geojsonUrl, function(data) {
                    L.geoJSON(data, {
                        style: function(feature) {
                            return {
                                fillOpacity: 0.8,
                                weight: 1,
                                color: feature.properties.kd_warna
                            };
                        },
                        onEachFeature: function(feature, layer) {
                            var popupContent = "<b>" + kelurahan.nama_kelurahan + "</b><br>" +
                                "Total Kelahiran: " + kelurahan.total_kelahiran + "<br>" +
                                "Total Kematian: " + kelurahan.total_kematian;

                            layer.on('mouseover', function(e) {
                                var popup = L.popup()
                                    .setLatLng(e.latlng)
                                    .setContent(popupContent)
                                    .openOn(map);
                            });

                            layer.on('mouseout', function() {
                                map.closePopup();
                            });

                            layer.on('click', function(e) {
                                var rtList = rtData.filter(function(rt) {
                                    return rt.kelurahan_kd === kelurahan
                                        .kd_kelurahan;
                                });

                                var labels = [];
                                var dataKelahiran = [];
                                var dataKematian = [];

                                rtList.forEach(function(rt) {
                                    labels.push(rt.nama_rt);
                                    dataKelahiran.push(rt.total_kelahiran);
                                    dataKematian.push(rt.total_kematian);
                                });

                                var ctx = document.getElementById('kelurahanChart')
                                    .getContext('2d');

                                destroyChart();

                                kelurahanChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: labels,
                                        datasets: [{
                                                label: 'Total Kelahiran',
                                                data: dataKelahiran,
                                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                borderColor: 'rgba(75, 192, 192, 1)',
                                                borderWidth: 1
                                            },
                                            {
                                                label: 'Total Kematian',
                                                data: dataKematian,
                                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                borderColor: 'rgba(255, 99, 132, 1)',
                                                borderWidth: 1
                                            }
                                        ]
                                    },
                                    options: {
                                        indexAxis: 'y',
                                        scales: {
                                            x: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });

                                $('#geojsonModal').modal('show');
                            });
                        }
                    }).addTo(map);
                });
            }
        });
    </script>
</body>

</html>
