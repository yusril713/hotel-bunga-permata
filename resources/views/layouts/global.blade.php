<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="facebook-domain-verification" content="dbue1kggexu7bd3kn1z8vcsbmd8mf9" />
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P4JGR3F');</script>
<!-- End Google Tag Manager -->
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet') }}" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('venobox/venobox.css') }}" rel="stylesheet">
    <title>Hotel Bunga Pertama | @yield('title')</title>
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            left: 20px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        #header {
            background: #fff;
            transition: all 0.5s;
            z-index: 997;
            padding: 15px 0;
            top: 40px;
        }

        #header.header-transparent {
            background: transparent;
        }

        #header.header-scrolled {
            top: 0;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
        }

        #header .logo {
            font-size: 36px;
            margin: 0;
            padding: 0;
            line-height: 1;
            font-weight: 400;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        #header .logo a {
            color: #413e66;
        }

        #header .logo img {
            max-height: 40px;
        }

        @media (max-width: 992px) {
            #header {
                top: 0;
            }

            #header .logo {
                font-size: 28px;
            }
        }

        .fixed-top.scrolled {
            background-color: #0F172B !important;
            transition: background-color 200ms linear;
        }
        /* Fixes dropdown menus placed on the right side */
        .ml-auto .dropdown-menu {
            left: auto !important;
            right: 0px;
        }
    </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4JGR3F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid fixed-top bg-transparent px-0">
            <div class="row gx-0">
                <div class="col-md-3 d-none d-md-block">
                    <a href="{{ url('/') }}"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        {{-- <h1 class="m-0 text-primary text-uppercase">Bunga Permata</h1> --}}
                        <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid" width="50">
                    </a>
                </div>
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg navbar-fixed navbar-dark p-3 p-lg-0">
                        <a href="{{ url('/') }}" class="navbar-brand d-block d-lg-none">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid" width="50">
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{ url('/') }}"
                                    class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                                <a href="{{ url('/about-us') }}"
                                    class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                                <a href="{{ url('/room') }}"
                                    class="nav-item nav-link {{ request()->routeIs('room*') ? 'active' : '' }}">Rooms</a>
                                <a href="{{ url('/whatsnew') }}"
                                    class="nav-item nav-link {{ request()->routeIs('whatsnew') ? 'active' : '' }}">What's
                                    New</a>
                                <a href="{{ url('/gallery') }}"
                                    class="nav-item nav-link {{ request()->routeIs('gallery-user') ? 'active' : '' }}">Gallery</a>

                                <a href="{{ url('explore') }}"
                                    class="nav-item nav-link {{ request()->routeIs('explore') ? 'active' : '' }}">Explore SULSEL</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        @yield('content')
        <div class="container-fluid page-header p-0 wow fadeIn" data-wow-delay="0.1s">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.283083149846!2d119.53342501476378!3d-5.057792796328929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbef96737785249%3A0x9f038d9b48a10128!2sHotel%20Bunga%20Permata!5e0!3m2!1sen!2ssg!4v1653064725617!5m2!1sen!2ssg"
                width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        {{-- <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span
                                    class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Enter your email">
                                <button type="button"
                                    class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start --> --}}
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s" style="margin-top: 0px">
            <div class="container pb-5">
                <div class="row justify-content-center g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="{{ url('/') }}">
                                <h1 class="text-white text-uppercase mb-3">Hotel Bunga Permata</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact Us</h6>
                        <p class="mb-2"><i class="fa fa-map me-3"></i>Jl. Poros, Marumpa, Kec.
                            Marusu, Kabupaten Maros, Sulawesi Selatan 90552, Indonesia
                        </p>
                        <p class="mb-2"><i class="fa fa-phone me-3"></i>082197325590</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>pt.indahpermatasejati@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/hotel_bunga_permata" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/HOTELBUNGAPERMATA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <div class="d-flex justify-content-end">
                                &copy; <a class="border-bottom" href="#">2022 Hotel Bunga Permata</a>, All Right
                                Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex </a>
                                Distributed By: <a class="border-bottom" href="https://themewagon.com"
                                    target="_blank">ThemeWagon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        @php
            $message = "*Nama:* \r\n*Alamat:* \r\n*Email:* \r\n*Keperluan:* \r\n\r\nTerima kasih telah menghubungi admin Hotel Bunga Permata";
        @endphp
        <a href="javascript:void(0)" class="float"
            onclick="window.open('https://api.whatsapp.com/send?phone=6282197325590&text={{ urlencode(utf8_encode($message)) }}')">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('venobox/venobox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // Initiate venobox (lightbox feature used in portofilo)
        $(document).ready(function() {
            // Porfolio isotope and filter
            $(window).on('load', function() {
                var portfolioIsotope = $('.portfolio-container').isotope({
                    itemSelector: '.portfolio-item'
                });
                $('#portfolio-flters li').on('click', function() {
                    $("#portfolio-flters li").removeClass('filter-active');
                    $(this).addClass('filter-active');

                    portfolioIsotope.isotope({
                        filter: $(this).data('filter')
                    });
                    // aos_init();
                });
            });
            $('.venobox').venobox({
                'share': false
            });
        });
    </script>
    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>
    @yield('script')
</body>

</html>
