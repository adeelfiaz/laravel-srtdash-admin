<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Laravel SRTDASH - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="{{ asset('theme/assets/images/icon/favicon.ico') }}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/metisMenu.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/slicknav.min.css')}}">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="{{asset('theme/assets/css/typography.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/default-css.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/responsive.css')}}">
        @yield('stylesheets')
        <!-- modernizr css -->
        <script src="{{asset('theme/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- page container area start --> 
        <div class="page-container">
            @yield('content')
        </div>
        <!-- page container area start --> 
        <!-- jquery latest version -->
        <script src="{{asset('theme/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
        <!-- bootstrap 4 js -->
        <script src="{{asset('theme/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/jquery.slicknav.min.js')}}"></script>
        <!-- others plugins -->
        <script src="{{asset('theme/assets/js/plugins.js')}}"></script>
        <script src="{{asset('theme/assets/js/scripts.js')}}"></script>
        @yield('scripts')
    </body>
</html>