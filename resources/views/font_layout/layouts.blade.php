<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <title>@yield('GYM')</title>
        <meta name="description" content="Home || WebSolutionUS">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('uploads/custom-images/wsus-img-2024-10-29-10-42-30-1685.png') }}?v=2">
        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('frontend/website/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/global/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/venobox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/scroll_button.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/animated_barfiller.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/range_slider.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/global/css/bootstrap-datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/spacing.mindc68.css?v=2.3.0') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/website/css/responsive.mindc68.css?v=2.3.0') }}">
        <link rel="stylesheet" href="{{ asset('frontend/global/toastr/toastr.min.css') }}">

        <!-- Toastr Fix -->
        <style>
            #toast-container {
                z-index: 999999;
                margin-top: 50px !important;
            }
        </style>

        <!-- Theme Colors -->
        <style>
            :root {
                --colorPrimary: #eefb13;
                --colorBlue: #0e0e55;
                --colorBlack: #171718;
                --colorGray: #bebec9;
                --paraColor: #737382;
                --lightBg: #eff0f3;
                --DarkVersion: #272732;
                --ratingColor: #f5980c;
            }
        </style>

        <!-- Background Images -->
        <style>
            .wsus__machine_bg::before {
                background: url('{{ asset('uploads/custom-images/wsus-img-2024-06-09-11-54-16-1532.png') }}') center center / cover no-repeat;
            }
            .wsus__machine_bg::after {
                background: url('{{ asset('uploads/custom-images/wsus-img-2024-06-09-11-54-51-8271.png') }}') center center / cover no-repeat;
            }
        </style>

        <script>
            "use strict";
        </script>
    </head>
    <body class=" ">
        <!--============================
            MENU START
        =============================-->
        <nav class="navbar navbar-expand-lg main_menu">
            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('uploads/website-images/logo.png') }}" alt="Fitness" class="img-fluid">
                </a>

                <!-- Mobile toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <i class="far fa-bars menu_icon_bar"></i>
                    <i class="far fa-times close_icon_close"></i>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/service') }}">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/trainer') }}">Trainer</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/membership') }}">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blogs') }}">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <!--============================
            MENU END
            AND small menu start
        =============================-->
        <div class="wsus__menu_offconvas">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel" class="d-none">Menu</h5>

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="offcanvas-body">

                    <a class="offcanvas_logo" href="{{ url('/') }}">
                        <img src="{{ asset('uploads/website-images/logo.png') }}" alt="Fitness" class="img-fluid">
                    </a>

                    <p class="description">
                        Qui magni autem id omnis assumenda ut maxime Quis sed voluptatum modi, omnis tenetur est.
                    </p>

                    <div class="offcanvas_contact">

                        <h3>Contact Us</h3>

                        <p>
                            <span>
                                <img src="{{ asset('website/images/location_icon_1.png') }}" alt="location" class="img-fluid w-100">
                            </span>
                            3815 Berkshire Circle
                        </p>

                        <a href="mailto:fitness@mail.com" class="d-block">
                            <span>
                                <img src="{{ asset('website/images/mail_icon_1.png') }}" alt="mail" class="img-fluid w-100">
                            </span>
                            fitness@mail.com
                        </a>

                        <a href="tel:8656582083" class="d-block">
                            <span>
                                <img src="{{ asset('website/images/call_icon_1.png') }}" alt="call" class="img-fluid">
                            </span>
                            865-658-2083
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <!--============================
            MENU END
        =============================-->


        @yield('content')




        <!--============================
            FOOTER START
        =============================-->
        <footer class="wsus__footer pt_120 xs_pt_100">
            <div class="container">
                <div class="row justify-content-between">

                    <!-- LOGO + ABOUT -->
                    <div class="col-sm-6 col-lg-3 wow fadeInUp">
                        <div class="wsus__footer_left">

                            <div class="wsus__footer_logo">
                                <img src="{{ asset('uploads/website-images/logo.png') }}" alt="logo" class="img-fluid w-100">
                            </div>

                            <p>
                                Qui magni autem id omnis assumenda ut maxime Quis sed voluptatum modi, omnis tenetur est.
                            </p>

                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- USEFUL LINKS -->
                    <div class="col-sm-6 col-lg-2 wow fadeInUp">
                        <div class="wsus__footer_manu">
                            <h4>Useful Link</h4>
                            <ul>
                                <li><a href="{{ url('about-us') }}">About Us</a></li>
                                <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                                <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('service') }}">Services</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- SUPPORT -->
                    <div class="col-sm-6 col-lg-2 wow fadeInUp">
                        <div class="wsus__footer_manu">
                            <h4>Support Desk</h4>
                            <ul>
                                <li><a href="{{ url('membership') }}">Pricing</a></li>
                                <li><a href="{{ url('workout') }}">Workout</a></li>
                                <li><a href="{{ url('blogs') }}">Blog</a></li>
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- CONTACT -->
                    <div class="col-sm-6 col-lg-3 wow fadeInUp">
                        <div class="wsus__footer_right">

                            <h4>Contact Us</h4>

                            <ul>
                                <li>
                                    <a href="tel:8656582083">
                                        <span><img src="{{ asset('website/images/Calling.png') }}" alt="icon"></span>
                                        865-658-2083
                                    </a>
                                </li>

                                <li>
                                    <a href="mailto:fitness@mail.com">
                                        <span><img src="{{ asset('website/images/sms.png') }}" alt="icon"></span>
                                        fitness@mail.com
                                    </a>
                                </li>

                                <li>
                                    <p>
                                        <span><img src="{{ asset('website/images/location_icon_2.png') }}" alt="icon"></span>
                                        3815 Berkshire Circle
                                    </p>
                                </li>

                                <li>
                                    <form method="POST" action="{{ url('newsletter-request') }}" id="newsletterForm">
                                        @csrf
                                        <input type="text" placeholder="Enter Your Email" name="email">
                                        <button type="submit" id="subscribe_btn">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>

                <!-- COPYRIGHT -->
                <div class="row">
                    <div class="col-xl-12 wow fadeInUp">
                        <div class="wsus__copy_right mt_115 xs_mt_95">
                            <p>2024 WebSolutionUs All Rights Reserved.</p>

                            <ul class="d-flex flex-wrap">
                                <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('terms-conditions') }}">Terms of Use</a></li>
                                <li><a href="{{ url('cookie-policy') }}">Cookie Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!--============================
            FOOTER END
        =============================-->

        <!--jquery library js-->
        <script src="{{ asset('frontend/global/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('frontend/global/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/website/js/Font-Awesome.js') }}"></script>
        <script src="{{ asset('frontend/website/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/website/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/website/js/venobox.min.js') }}"></script>
        <script src="{{ asset('frontend/website/js/wow.min.js') }}"></script>
        {{-- <script src="{{ asset('frontend/website/js/scroll_button.js') }}"></script> --}}
        <script src="{{ asset('frontend/website/js/animated_barfiller.js') }}"></script>
        <script src="{{ asset('frontend/website/js/jquery.countup.min.js') }}"></script>
        <script src="{{ asset('frontend/website/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/website/js/range_slider.js') }}"></script>
        <script src="{{ asset('frontend/website/js/sticky_sidebar.js') }}"></script>
        <script src="{{ asset('frontend/website/js/select2.min.js') }}"></script>

        <script src="{{ asset('frontend/global/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/website/js/maindc68.js?v=2.3.0') }}"></script>
        <script src="{{ asset('frontend/global/toastr/toastr.min.js') }}"></script>
        <!-- Google reCAPTCHA -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- Cookie -->
        <script src="{{ asset('frontend/website/js/cookieconsent.min.js') }}"></script>

        @yield('scripts')

        <script>
            var base_url = "{{ url('/') }}";
            (function($) {
                "use strict";
                $(document).ready(function() {

                    $("#select_js3").on('change', function() {
                        $('#setLanguage').submit();
                    });

                    $('[name="currency"]').on('change', function() {
                        $('#setCurrency').submit();
                    });

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $('.datepicker').datepicker();
                });
            })(jQuery);

            function removeCurrency(value) {
                return value.replace(/[^0-9.]/g, '');
            }
        </script>

        <script>
            "use strict";
            $(document).on("click", ".remove-from-cart", function() {

                $(this).html('<i class="fas fa-spinner fa-spin"></i>');
                $(this).removeClass('remove-from-cart');

                let rowid = $(this).data('id');
                let parernt_li = $(this).parent('li');

                $.ajax({
                    type: 'GET',
                    url: "{{ url('remove-from-cart') }}/" + rowid,
                    success: function(response) {

                        toastr.success(response.message);
                        $(".wsus__droap_cart_list").html(response.view);
                        $(".cart_total").html(response.subtotal);
                        $(".cart_count").html(response.cartCount);

                        const checkout_btn = $('.checkout_btn')
                        if (checkout_btn && response.cartCount == 0) {
                            checkout_btn.addClass('invisible');
                        }

                        parernt_li.remove();

                        if (response.subtotal == '$0.00') {
                            const navCart = `<div class="text">
                                <h6 class="no-cart">No Items In Cart</h6>
                            </div>`;

                            $(navCart).insertAfter('.wsus__droap_cart > h5')
                            $('.wsus__droap_cart_list').html('')
                            $('.wsus__droap_total_price').html('')
                        }
                    },
                    error: function(response) {
                        toastr.error("Server error occurred");
                    }
                });
            });
        </script>

        <script>
            (function($) {
                "use strict";
                $(document).ready(function() {

                    $('[name="code"]').on('change', function() {
                        $('#setLanguage').submit();
                    });

                    var viewPortScale = 1 / window.devicePixelRatio;

                    $('#viewport').attr('content', 'user-scalable=no, initial-scale=' + viewPortScale + ', width=device-width');
                });
            })(jQuery);
        </script>

        <script>
            $(document).on("click", '.wpcc-btn', function() {
                $('.wpcc-container').fadeOut(1000);
            });
        </script>

        <script>
            'use strict';

            $(document).ready(function() {

                $('.join-now').on('click', function(e) {
                    e.preventDefault();

                    var plan = $(this).data('plan');
                    var plan_id = $(this).data('plan_id');

                    const user = "{{ auth()->check() ? 'yes' : '' }}";

                    if (user === '') {
                        window.location.href = "{{ route('login') }}";
                        return;
                    }

                    const route = "{{ url('payment/confirm') }}?plan=" + plan + "&plan_id=" + plan_id + "&type=plan";

                    window.location.href = route;
                });

            });
        </script>

        <script>
            $(document).ready(function() {
                "use strict";

                $('#newsletterForm').on('submit', function(e) {
                    e.preventDefault();

                    const email = $(this).find('[name="email"]').val();

                    if (email == '') {
                        toastr.error('Email is required');
                        return;
                    }

                    $("#subscribe_btn").prop("disabled", true).html('<i class="fas fa-spinner"></i>');

                    var form = $(this);
                    var url = form.attr('action');
                    var data = form.serialize();

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: data,

                        beforeSend: function() {
                            $("#subscribe_btn").html('<i class="fas fa-spinner fa-spin"></i>').attr("disabled", true);
                        },

                        success: function(response) {
                            if (response.status == 'success') {
                                toastr.success(response.message);
                                $("#newsletterForm")[0].reset();
                            } else {
                                toastr.error(response.message);
                            }

                            $("#subscribe_btn").html('<i class="fas fa-paper-plane"></i>').removeAttr("disabled");
                        },

                        error: function(err) {
                            toastr.error('Something went wrong!');
                            $("#subscribe_btn").html('<i class="fas fa-paper-plane"></i>').removeAttr("disabled");
                        }
                    });
                });
            });
        </script>
    </body>
</html>




