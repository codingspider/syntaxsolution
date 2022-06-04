
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <!-- Meta Tags -->
        <meta charset="UTF-8">
        <title>{{ $title }} | {{ $appname->content }}</title>
        {!! MetaTag::tag('description') !!}        
        {!! MetaTag::tag('keywords') !!}        
        {!! MetaTag::tag('title') !!}        
        {!! MetaTag::openGraph() !!}
        {!! MetaTag::twitterCard() !!}
        {!! MetaTag::tag('image') !!}
        <meta name="keywords" content="Business, Corporate, Marketing, Social, Media, Coding, Copywriting, Android dev">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/global.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/responsive.css') }}">
        <!-- Theme Color File -->
        <link rel="stylesheet" href="{{ asset('assets/Frontend/css/colors/motarde.css') }}">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HQ5PCKWRPS"></script>

        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HQ5PCKWRPS');
        </script>
    </head>
    <body>
    @include('partials.header')
    @include('partials.nav')
        @yield('content')
    @include('partials.footer')
        <!--Start Scroll-To-Top-->
        <div class="scroll-top">
            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
        </div>
        <!--End Scroll-To-Top-->
        <!--JavaScript Scripts Start -->
        <script src="{{ asset('assets/Frontend/js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/jquery.filterizr.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/viewportchecker.js') }}"></script>
        <script src="{{ asset('assets/Frontend/js/custom.js') }}"></script>
        <!--JavaScript Scripts End -->
    </body>
</html>

