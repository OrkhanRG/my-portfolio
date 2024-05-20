<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css')

</head>
<body class="home-one">
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    @include('layouts.front.header')

    <!--Form Back Drop-->
    <div class="form-back-drop"></div>

    <!-- Hidden Sidebar -->
    {{--    Contcat--}}
    <section class="hidden-bar">
        <div class="inner-box text-center">
            <div class="cross-icon"><span class="fa fa-times"></span></div>
            <div class="title">
                <h4>Mənimlə Əlaqə</h4>
            </div>

            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="post" action="{{ route('front.contact') }}">
                    <div class="form-group">
                        <input type="text" name="text" value="" placeholder="Ad Soyad" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Email ünvan" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Mesajınız" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="theme-btn">Göndər</button>
                    </div>
                </form>
            </div>

            <!--Social Icons-->
            <div class="social-style-one">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </section>
    <!--End Hidden Sidebar -->

    @yield('content')

    @include('layouts.front.footer')

</div>
<!--End pagewrapper-->


<!-- Jquery -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Appear Js -->
<script src="{{ asset('assets/js/appear.min.js') }}"></script>
<!-- Slick -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Nice Select -->
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<!-- Image Loader -->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Isotope -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!--  WOW Animation -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Custom script -->
<script src="{{ asset('assets/js/script.js') }}"></script>

<!-- For Contact Form -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

@stack('js')

</body>
</html>
