<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>万盛昌水业 - 健康饮水综合服务商，呼市桶装水行业领导者</title>
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
          rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/magnific-popup/magnific-popup.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('porto::css/theme.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::css/theme-elements.css') }}">
    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/rs-plugin/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('porto::plugins/circle-flip-slideshow/css/component.css') }}">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('porto::css/skins/default.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('porto::css/custom.css') }}">
    @stack('css')
    <!-- Head Libs -->
    <script src="{{ Theme::asset('porto::plugins/modernizr/modernizr.min.js') }}"></script>
</head>
<body>
<div class="body">
    @include('porto::layouts.header')
    @yield('content')
    @include('porto::layouts.footer')
</div>
<!-- Vendor -->
<script src="{{ Theme::asset('porto::plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/jquery-cookie/jquery-cookie.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/common/common.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/jquery.validation/jquery.validation.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/vide/vide.min.js') }}"></script>
@stack('js')
<!-- Theme Base, Components and Settings -->
<script src="{{ Theme::asset('porto::js/theme.js') }}"></script>
<!-- Current Page Vendor and Views -->
<script src="{{ Theme::asset('porto::plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ Theme::asset('porto::plugins/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
<script src="{{ Theme::asset('porto::js/views/view.home.js') }}"></script>
<!-- Theme Custom -->
<script src="{{ Theme::asset('porto::js/custom.js') }}"></script>
<!-- Theme Initialization Files -->
<script src="{{ Theme::asset('porto::js/theme.init.js') }}"></script>
</body>
</html>