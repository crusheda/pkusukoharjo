<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Animation Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Slick Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <title>Portal RS PKU Muhammadiyah Sukoharjo</title>

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/logo/pku/pku_ico.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/logo/pku/pku_ico.png') }}">
    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
</head>

<body>

    <!-- Preloader -->
    {{-- <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div> --}}
    <!-- End Preloader -->

    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    <div class="go-top"><i class="fas fa-chevron-up"></i></div>

    <!-- jQuery Min JS -->
    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Popper Min JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Slick Min JS -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Mean Menu JS -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- Appear Min JS -->
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <!-- Odometer Min JS -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <!-- Parallax Min JS -->
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <!-- Magnific Popup Min JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nice Select Min JS -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- WOW Min JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- AjaxChimp Min JS -->
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <!-- Contact Form Min JS -->
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
