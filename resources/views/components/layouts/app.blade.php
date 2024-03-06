<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>NAYOBY BANK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="New Express" />
    <meta name="keywords" content="New Express" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/font-awesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/owl.theme.default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/dl-menu.css')}}" />
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('template/css/weather.css')}}" /> -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/flaticon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/venobox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/responsive.css')}}" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{asset($app_profile->logo)}}" />

    @livewireStyles
</head>

<body>

    @include('components.layouts.loader')
    @include('components.layouts.header')
    @include('components.layouts.navigation')
    @include('components.layouts.tranding')

    {{$slot}}
    
    @include('components.layouts.footer')
   
    <script src="{{asset('template/js/jquery_min.js')}}"></script>
    <script src="{{asset('template/js/modernizr.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.js')}}"></script>
    <script src="{{asset('template/js/venobox.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('template/js/owl.carousel.js')}}"></script>
    <script src="{{asset('template/js/jquery.dlmenu.js')}}"></script>
    <script src="{{asset('template/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('template/js/bit_timer.js')}}"></script>
    <!-- <script src="{{asset('template/js/weather.js')}}"></script> -->
    <script src="{{asset('template/js/custom.js')}}"></script>
    <!--main js file end-->
    @livewireScripts

    @stack('scripts')
</body>

</html>