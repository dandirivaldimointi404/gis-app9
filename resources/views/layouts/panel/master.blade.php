<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gis</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets_panel/images/favicon.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('assets_panel/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('assets_panel/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets_panel/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets_panel/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_panel/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="{{ asset('assets_panel/images/logo.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('assets_panel/images/logo-compact.png') }}"
                            alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('assets_panel/images/logo-text.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        @include('layouts.panel.header')

        @include('layouts.panel.sidebar')


        @yield('content')


        @include('layouts.panel.footer')
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('assets_panel/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('assets_panel/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets_panel/js/settings.js') }}"></script>
    <script src="{{ asset('assets_panel/js/gleek.js') }}"></script>
    <script src="{{ asset('assets_panel/js/styleSwitcher.js') }}"></script>

    {{-- ADDD --}}
    <script src="{{ asset('assets_panel/plugins/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets_panel/plugins/validation/jquery.validate-init.js') }}"></script>

    <script src="{{ asset('assets_panel/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets_panel/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets_panel/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('assets_panel/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('assets_panel/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('assets_panel/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('assets_panel/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('assets_panel//plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('assets_panel/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets_panel/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('assets_panel/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets_panel/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('assets_panel/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets_panel/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('assets_panel/js/dashboard/dashboard-1.js') }}"></script>


    @stack('createkelurahan')
    @stack('creatert')

</body>

</html>
