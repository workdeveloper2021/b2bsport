<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/capitalshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 07:19:07 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Sportiff</title>
<meta name="description" content>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="https://www.sportsdrive.in/images/favicon.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ url('/') }}/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/css/slicknav.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/css/flaticon.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/css/price_rangs.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/css/magnific-popup.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/css/themify-icons.css">
<link rel="stylesheet" href="{{ url('/') }}/assets/css/slick.css">
<!-- <link rel="stylesheet" href="{{ url('/') }}/assets/css/nice-select.css"> -->
<link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
</head>
 @stack('stylesheets')
<body>

<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<img src="https://www.sportsdrive.in/images/logo.png" alt="loder">
</div>
</div>
</div>
</div>

<header>

@include('include.header')
</header>
@yield('content')

<footer>
@include('include.footer')
</footer>

<div id="back-top">
<a class="wrapper" title="Go to Top" href="#">
<div class="arrows-container">
<div class="arrow arrow-one">
</div>
<div class="arrow arrow-two">
</div>
</div>
</a>
</div>


<script src="{{ url('/') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{ url('/') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ url('/') }}/assets/js/popper.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>

<script src="{{ url('/') }}/assets/js/owl.carousel.min.js"></script>
<script src="{{ url('/') }}/assets/js/slick.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.slicknav.min.js"></script>

<script src="{{ url('/') }}/assets/js/wow.min.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.magnific-popup.js"></script>
<!-- <script src="{{ url('/') }}/assets/js/jquery.nice-select.min.js"></script> -->
<script src="{{ url('/') }}/assets/js/jquery.counterup.min.js"></script>
<script src="{{ url('/') }}/assets/js/waypoints.min.js"></script>
<script src="{{ url('/') }}/assets/js/price_rangs.js"></script>

<script src="{{ url('/') }}/assets/js/contact.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.form.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.validate.min.js"></script>
<script src="{{ url('/') }}/assets/js/mail-script.js"></script>
<script src="{{ url('/') }}/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="{{ url('/') }}/assets/js/plugins.js"></script>
<script src="{{ url('/') }}/assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"82c899cc2d587943","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>

@stack('scripts')
</body>

<!-- Mirrored from preview.colorlib.com/theme/capitalshop/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 07:19:50 GMT -->
</html>