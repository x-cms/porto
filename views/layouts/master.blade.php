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
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/magnific-popup/magnific-popup.min.css') }}">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('proto::css/theme.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::css/theme-elements.css') }}">
    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/rs-plugin/css/settings.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/rs-plugin/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('proto::plugins/circle-flip-slideshow/css/component.css') }}">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('proto::css/skins/default.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ Theme::asset('proto::css/custom.css') }}">
    @stack('css')
    <!-- Head Libs -->
    <script src="{{ Theme::asset('proto::plugins/modernizr/modernizr.min.js') }}"></script>
</head>
<body>
<div class="body">
    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')
</div>
<!-- Vendor -->
<script src="{{ Theme::asset('proto::plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/jquery.appear/jquery.appear.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/jquery-cookie/jquery-cookie.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/common/common.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/jquery.validation/jquery.validation.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/jquery.gmap/jquery.gmap.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/isotope/jquery.isotope.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/vide/vide.min.js') }}"></script>
@stack('js')
<!-- Theme Base, Components and Settings -->
<script src="{{ Theme::asset('proto::js/theme.js') }}"></script>
<!-- Current Page Vendor and Views -->
<script src="{{ Theme::asset('proto::plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ Theme::asset('proto::plugins/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
<script src="{{ Theme::asset('proto::js/views/view.home.js') }}"></script>
<!-- Theme Custom -->
<script src="{{ Theme::asset('proto::js/custom.js') }}"></script>
<!-- Theme Initialization Files -->
<script src="{{ Theme::asset('proto::js/theme.init.js') }}"></script>
</body>
</html>