<html lang="en" class=" ">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gis Mobile</title>
    <meta content="Ensign PWA Mobile App" name="description">
    <meta content="themepassion" name="author">


    <!-- App Icons -->
    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets_pwa/assets/images/icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets_pwa/assets/images/icons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512"
        href="{{ asset('assets_pwa/assets/images/icons/android-icon-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets_pwa/assets/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('assets_pwa/assets/images/icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets_pwa/assets/images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets_pwa/assets/images/icons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets_pwa/assets/images/icons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{ asset('assets_pwa/assets/css/preloader.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('assets_pwa/modules/materialize/materialize.min.css') }}" type="text/css" rel="stylesheet"
        media="screen">
    <link href="{{ asset('assets_pwa/modules/fonts/mdi/appicon/appicon.css') }}" type="text/css" rel="stylesheet"
        media="screen">
    <link href="{{ asset('assets_pwa/modules/fonts/mdi/materialdesignicons.min.css') }}" type="text/css"
        rel="stylesheet" media="screen">
    <link href="{{ asset('assets_pwa/modules/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css"
        rel="stylesheet" media="screen">
    <link href="{{ asset('assets_pwa/modules/fancybox/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css"
        media="screen">
    <link href="{{ asset('assets_pwa/modules/flickity/flickity.min.css') }}" rel="stylesheet" type="text/css"
        media="screen">
    <link href="{{ asset('assets_pwa/assets/css/style.css') }}" type="text/css" rel="stylesheet" media="screen"
        id="main-style">
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->


<body class=" menu-full  contain-hc social-home header-image html" data-header="light" data-footer="light"
    data-header_align="app" data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="center"
    data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light" data-theme="indigo">
    <div class="preloader-background" style="display: none;">
        <div class="preloader-wrapper">
            <div class="configure-border-1">
            </div>
            <div class="configure-border-2">
            </div>
        </div>
    </div>

    @include('layouts.pwa.navbar')

    @yield('content')

    @include('layouts.pwa.footer')

    @include('layouts.pwa.bottommenu')

    <script src="{{ asset('assets_pwa/assets/js/pwa.jss') }}"></script>
    <script src="{{ asset('assets_pwa/modules/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets_pwa/modules/materialize/materialize.js') }}"></script>
    <script src="{{ asset('assets_pwa/modules/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets_pwa/assets/js/variables.js') }}"></script>
    <script src="{{ asset('assets_pwa/modules/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_pwa/modules/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets_pwa/modules/flickity/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_pwa/assets/js/common.js') }}"></script>
    <script src="{{ asset('assets_pwa/modules/app/init.js') }}"></script>
    <script src="{{ asset('assets_pwa/modules/app/settings.js') }}"></script>
    <script src="{{ asset('assets_pwa/modules/app/scripts.js') }}"></script>
    <script src="{{ asset('assets_pwa/assets/js/preloader.js') }}"></script>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target right-aligned"></div>
</body>

</html>
