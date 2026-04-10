<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <title>GYM</title>
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
    <body
        class=" ">
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
        <!--============================
            Slider start
        =============================-->
        <section class="wsus__banner_slider wow fadeInUp">
            <div class="row banner_slider">

                <div class="col-12">
                    <div class="wsus__slider_item"
                        style="background: url('{{ asset('uploads/custom-images/home-page-slider/wsus-img-2024-07-11-06-53-48-9010.jpg') }}')">

                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-8 col-lg-10">
                                    <div class="wsus__banner_slider_text">

                                        <h5>Welcome to Fitness</h5>

                                        <h1>Build Strength</h1>

                                        <p>
                                            Whether you're here to build strength, improve endurance, or find balance, we have something for everyone.
                                        </p>

                                        <a class="common_btn white_btn" href="tel:1234567890">
                                            <i class="fab fa-whatsapp"></i>
                                            Talk to a Specialist
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="wsus__slider_item"
                        style="background: url('{{ asset('uploads/custom-images/home-page-slider/wsus-img-2024-09-09-03-44-28-6076.png') }}')">

                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-8 col-lg-10">
                                    <div class="wsus__banner_slider_text">

                                        <h5>Welcome to Fitness</h5>

                                        <h1>Flex Flow Fitness</h1>

                                        <p>
                                            Whether you're here to build strength, improve endurance, or find balance, we have something for everyone.
                                        </p>

                                        <a class="common_btn white_btn" href="tel:1234567890">
                                            <i class="fab fa-whatsapp"></i>
                                            Talk to a Specialist
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="wsus__slider_item"
                        style="background: url('{{ asset('uploads/custom-images/home-page-slider/slide1.png') }}')">

                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-8 col-lg-10">
                                    <div class="wsus__banner_slider_text">

                                        <h5>Welcome to Fitness</h5>

                                        <h1>Zen Fit Gym Studio</h1>

                                        <p>
                                            Whether you're here to build strength, improve endurance, or find balance, we have something for everyone.
                                        </p>

                                        <a class="common_btn white_btn" href="tel:1234567890">
                                            <i class="fab fa-whatsapp"></i>
                                            Talk to a Specialist
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!--============================
            Slider end
        =============================-->
        <section class="wsus__program mt_110 xs_mt_90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 wow fadeInUp">
                        <div class="wsus__section_headeing heading_left mb_50">
                            <h2>Our Complete Gym Program</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wsus__program_area wow fadeInUp">
                <div class="row program_slider">

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/p1.png') }}" alt="Cardio Workout" class="img-fluid">

                            <div class="text">
                                <a href="{{ url('workout/cardio-workout') }}" class="title">Cardio Workout</a>
                                <a href="{{ url('workout/cardio-workout') }}" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>

                                <ul>
                                    <li>100 Day</li>
                                    <li>20 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/wsus-img-2024-06-04-04-12-51-2038.jpg') }}" alt="Basic barbell training" class="img-fluid">

                            <div class="text">
                                <a href="{{ url('workout/basic-barbell-training') }}" class="title">Basic barbell training</a>
                                <a href="{{ url('workout/basic-barbell-training') }}" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>

                                <ul>
                                    <li>20 Day</li>
                                    <li>20 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/p2.png') }}" alt="Weight Loss Program" class="img-fluid">

                            <div class="text">
                                <a href="{{ url('workout/weight-loss-program') }}" class="title">Weight Loss Program</a>
                                <a href="{{ url('workout/weight-loss-program') }}" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>

                                <ul>
                                    <li>30 Day</li>
                                    <li>50 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/p3.png') }}" alt="Nutrition Plan" class="img-fluid">

                            <div class="text">
                                <a href="{{ url('workout/nutrition-plan') }}" class="title">Nutrition Plan</a>
                                <a href="{{ url('workout/nutrition-plan') }}" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>

                                <ul>
                                    <li>20 Day</li>
                                    <li>10 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/p4.png') }}" alt="Free Weights Program" class="img-fluid">

                            <div class="text">
                                <a href="{{ url('workout/free-weights-program') }}" class="title">Free Weights Program</a>
                                <a href="{{ url('workout/free-weights-program') }}" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>

                                <ul>
                                    <li>10 Day</li>
                                    <li>10 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/wsus-img-2024-07-11-09-00-50-4617.jpg') }}" alt="Powerlifting Programs" class="img-fluid">

                            <div class="text">
                                <a href="{{ url('workout/powerlifting-programs') }}" class="title">Powerlifting Programs</a>
                                <a href="{{ url('workout/powerlifting-programs') }}" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>

                                <ul>
                                    <li>30 Day</li>
                                    <li>20 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="wsus__machine pt_110 xs_pt_90">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 m-auto wow fadeInUp">
                        <div class="wsus__section_headeing mb_50">
                            <h6>OUR MACHINES</h6>
                            <h2>Your Gym Dreams to Life</h2>
                        </div>
                    </div>
                </div>

                <div class="wsus__machine_bg wow fadeInUp">
                    <div class="row justify-content-between">

                        <!-- TEXT SIDE -->
                        <div class="col-lg-6 col-xl-6">
                            <div class="wsus__machine_text">

                                <h2>IT’S TIME TO GET STRONGER</h2>

                                <ul>
                                    <li>
                                        <span>1</span>
                                        Provide a variety of modern and well-maintained fitness equipment.
                                    </li>
                                    <li>
                                        <span>2</span>
                                        Weightlifting Equipment
                                    </li>
                                    <li>
                                        <span>3</span>
                                        Including Cardio Machines and Functional Training Tools.
                                    </li>
                                </ul>

                                <a href="{{ url('machines') }}" class="common_btn common_btn_2">
                                    More Details <i class="far fa-long-arrow-right"></i>
                                </a>

                            </div>
                        </div>

                        <!-- SLIDER SIDE -->
                        <div class="col-lg-6 col-xl-5">
                            <div class="wsus__machine_slider_area">
                                <div class="row machin_slider">

                                    <div class="col-12">
                                        <div class="wsus__machine_slider_item">
                                            <img src="{{ asset('uploads/custom-images/wsus-img-2024-07-11-09-23-38-7411.jpg') }}"
                                                alt="machine" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="wsus__machine_slider_item">
                                            <img src="{{ asset('uploads/custom-images/wsus-img-2024-07-11-09-23-38-3005.jpg') }}"
                                                alt="machine" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="wsus__machine_slider_item">
                                            <img src="{{ asset('uploads/custom-images/wsus-img-2024-07-11-09-23-38-7737.jpg') }}"
                                                alt="machine" class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section class="wsus__home_counter mt_95 xs_mt_75 mb_120 xs_mb_100">
            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-xl-3 wow fadeInUp">
                        <div class="wsus__home_counter_item">
                            <h2><span class="count">12</span></h2>
                            <p>Years of Experience</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 wow fadeInUp">
                        <div class="wsus__home_counter_item">
                            <h2><span class="count">6</span></h2>
                            <p>Skilled Trainers</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 wow fadeInUp">
                        <div class="wsus__home_counter_item">
                            <h2><span class="count">20</span></h2>
                            <p>Workouts</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 wow fadeInUp">
                        <div class="wsus__home_counter_item">
                            <h2><span class="count">100</span></h2>
                            <p>Products</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section class="wsus__trainer pt_110 xs_pt_90 pb_120 xs_pb_100"
            style="background: url('{{ asset('uploads/custom-images/wsus-img-2024-07-11-09-33-27-3749.jpg') }}');">

            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-xxl-5 m-auto wow fadeInUp">
                        <div class="wsus__section_headeing mb_25">
                            <h2>START TRAINING WITH US</h2>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Trainer 1 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">

                            <img src="{{ asset('uploads/custom-images/t1.png') }}" alt="Trainer" class="img-fluid w-100">

                            <div class="text">
                                <a href="{{ url('trainer/carson-williams') }}" class="title">Carson Williams</a>
                                <p>Personal Trainer</p>
                            </div>

                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Trainer 2 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">

                            <img src="{{ asset('uploads/custom-images/t2.png') }}" alt="Trainer" class="img-fluid w-100">

                            <div class="text">
                                <a href="{{ url('trainer/flavia-stuart') }}" class="title">Flavia Stuart</a>
                                <p>Strength Coach</p>
                            </div>

                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Trainer 3 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">

                            <img src="{{ asset('uploads/custom-images/t3.png') }}" alt="Trainer" class="img-fluid w-100">

                            <div class="text">
                                <a href="{{ url('trainer/leilani-rosales') }}" class="title">Leilani Rosales</a>
                                <p>Strength Coach</p>
                            </div>

                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Trainer 4 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">

                            <img src="{{ asset('uploads/custom-images/t4.png') }}" alt="Trainer" class="img-fluid w-100">

                            <div class="text">
                                <a href="{{ url('trainer/eden-howard') }}" class="title">Eden Howard</a>
                                <p>Personal Trainer</p>
                            </div>

                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Trainer 5 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">

                            <img src="{{ asset('uploads/custom-images/t5.png') }}" alt="Trainer" class="img-fluid w-100">

                            <div class="text">
                                <a href="{{ url('trainer/chava-britt') }}" class="title">Chava Britt</a>
                                <p>Powerlifting Coach</p>
                            </div>

                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Trainer 6 -->
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">

                            <img src="{{ asset('uploads/custom-images/t6.png') }}" alt="Trainer" class="img-fluid w-100">

                            <div class="text">
                                <a href="{{ url('trainer/miriam-mathews') }}" class="title">Miriam Mathews</a>
                                <p>Physiologist</p>
                            </div>

                            <ul></ul>

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 text-center mt_60 wow fadeInUp">
                        <a class="common_btn" href="tel:1234567890">
                            <i class="fab fa-whatsapp"></i> Talk to a Specialist
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section class="wsus__program mt_110 xs_mt_90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 wow fadeInUp">
                        <div class="wsus__section_headeing heading_left mb_50">
                            <h2>Our Complete Gym Program</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wsus__program_area wow fadeInUp">
                <div class="row program_slider">

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/p1.png') }}" alt="Cardio Workout" class="img-fluid">
                            <div class="text">
                                <a href="workout/cardio-workout.html" class="title">Cardio Workout</a>
                                <a href="workout/cardio-workout.html" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>
                                <ul>
                                    <li>100 Day</li>
                                    <li>20 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/wsus-img-2024-06-04-04-12-51-2038.jpg') }}" alt="Basic barbell training" class="img-fluid">
                            <div class="text">
                                <a href="workout/basic-barbell-training.html" class="title">Basic barbell training</a>
                                <a href="workout/basic-barbell-training.html" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>
                                <ul>
                                    <li>20 Day</li>
                                    <li>20 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="wsus__program_item">
                            <img src="{{ asset('uploads/custom-images/workout/p2.png') }}" alt="Weight Loss Program" class="img-fluid">
                            <div class="text">
                                <a href="workout/weight-loss-program.html" class="title">Weight Loss Program</a>
                                <a href="workout/weight-loss-program.html" class="arrow_button">
                                    <i class="far fa-long-arrow-right"></i>
                                </a>
                                <ul>
                                    <li>30 Day</li>
                                    <li>50 Seats</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="wsus__video pt_190 xs_pt_100 pb_175 xs_pb_95" style="background-image: url('{{ asset('uploads/custom-images/b1.png') }}'); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 wow fadeInUp">
                        <div class="wsus__video_area_btn">
                            <a class="play_btn venobox vbox-item"
                            data-autoplay="true"
                            data-vbtype="video"
                            href="https://www.youtube.com/watch?v=R30JGe23A24&t=2s&pp=ygUHbWFuIGd5bQ%3D%3D">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>

                        <div class="wsus__section_headeing heading_left mt_40">
                            <h2>IT’S TIME TO GET STRONGER</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wsus__branding">
            <div class="container">
                <div class="row branding_slider">

                    <div class="col-xl-2 wow fadeInUp">
                        <a href="#" class="wsus__branding_img">
                            <div class="img">
                                <img src="{{ asset('uploads/custom-images/partner/wsus-img-2024-07-11-09-35-35-4684.png') }}" alt="brand" class="img-fluid w-100">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-2 wow fadeInUp">
                        <a href="#" class="wsus__branding_img">
                            <div class="img">
                                <img src="{{ asset('uploads/custom-images/partner/wsus-img-2024-07-11-09-35-59-7869.png') }}" alt="brand" class="img-fluid w-100">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-2 wow fadeInUp">
                        <a href="#" class="wsus__branding_img">
                            <div class="img">
                                <img src="{{ asset('uploads/custom-images/partner/wsus-img-2024-07-11-09-36-54-8804.png') }}" alt="brand" class="img-fluid w-100">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-2 wow fadeInUp">
                        <a href="#" class="wsus__branding_img">
                            <div class="img">
                                <img src="{{ asset('uploads/custom-images/partner/wsus-img-2024-07-11-09-37-15-2862.png') }}" alt="brand" class="img-fluid w-100">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-2 wow fadeInUp">
                        <a href="#" class="wsus__branding_img">
                            <div class="img">
                                <img src="{{ asset('uploads/custom-images/partner/wsus-img-2024-07-11-09-37-38-6817.png') }}" alt="brand" class="img-fluid w-100">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-2 wow fadeInUp">
                        <a href="#" class="wsus__branding_img">
                            <div class="img">
                                <img src="{{ asset('uploads/custom-images/partner/wsus-img-2024-07-11-09-38-37-9879.png') }}" alt="brand" class="img-fluid w-100">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-2 wow fadeInUp">
                        <a href="#" class="wsus__branding_img">
                            <div class="img">
                                <img src="{{ asset('uploads/custom-images/partner/wsus-img-2024-07-11-09-39-01-1328.png') }}" alt="brand" class="img-fluid w-100">
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-2 wow fadeInUp">
                        <a href="#" class="wsus__branding_img">
                            <div class="img">
                                <img src="{{ asset('uploads/custom-images/partner/wsus-img-2024-07-11-09-39-22-2129.png') }}" alt="brand" class="img-fluid w-100">
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <section class="wsus__testimonial mt_120 xs_mt_100">
            <div class="container">

                <div class="wsus__testimonial_area pt_85 pb_90 wow fadeInUp"
                style="background-image: url('{{ asset('uploads/custom-images/wsus-img-2024-07-11-09-48-02-9202.png') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;">

                    <div class="row slider-for">

                        <div class="col-xl-12">
                            <div class="wsus__testimonial_content">
                                <p>"Joining this gym was the best decision..."</p>
                                <h6>Rizvi</h6>
                                <span>Managing Director</span>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="wsus__testimonial_content">
                                <p>"As someone who’s always been into sports..."</p>
                                <h6>James R.</h6>
                                <span>Professional Athlete</span>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="wsus__testimonial_content">
                                <p>"What I love most about this gym..."</p>
                                <h6>Emily K.</h6>
                                <span>School Teacher</span>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="wsus__testimonial_content">
                                <p>"I was really intimidated to join a gym..."</p>
                                <h6>Mike T.</h6>
                                <span>Software Developer</span>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="wsus__testimonial_content">
                                <p>"I’ve been working with a personal trainer..."</p>
                                <h6>Linda A.</h6>
                                <span>Business Consultant</span>
                            </div>
                        </div>

                    </div>

                    <div class="wsus_small_slider_img_area mt_40">
                        <div class="row slider-nav">

                            <div class="col-xl-4">
                                <div class="wsus__slider_small_img">
                                    <img src="{{ asset('uploads/custom-images/wsus-img-2024-06-03-10-11-15-3072.jpg') }}" class="img-fluid w-100">
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="wsus__slider_small_img">
                                    <img src="{{ asset('uploads/custom-images/wsus-img-2024-08-15-10-28-12-5637.png') }}" class="img-fluid w-100">
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="wsus__slider_small_img">
                                    <img src="{{ asset('uploads/custom-images/wsus-img-2024-06-03-10-14-03-3508.jpg') }}" class="img-fluid w-100">
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="wsus__slider_small_img">
                                    <img src="{{ asset('uploads/custom-images/wsus-img-2024-08-15-10-24-56-5280.png') }}" class="img-fluid w-100">
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="wsus__slider_small_img">
                                    <img src="{{ asset('uploads/custom-images/wsus-img-2024-08-15-10-26-21-6301.png') }}" class="img-fluid w-100">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section class="wsus__blog pt_105 xs_pt_85 pb_120 xs_pb_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInUp">
                        <div class="wsus__section_headeing heading_left mb_50">
                            <h2>Read the Latest News</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row blog_slider">

                    <div class="col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_item">

                            <a href="blog/stretch-your-way-to-better-health.html" class="wsus__blog_img">
                                <img src="{{ asset('website/images/n1.png') }}" alt="img" class="img-fluid w-100">
                            </a>

                            <div class="wsus__blog_text">
                                <ul class="d-flex flex-wrap">
                                    <li>
                                        <span>
                                            <img src="{{ asset('website/images/clock.png') }}" alt="icon" class="img-fluid w-100">
                                        </span>
                                        12 August, 2024
                                    </li>
                                    <li>
                                        <span>
                                            <img src="{{ asset('website/images/massage.png') }}" alt="icon" class="img-fluid w-100">
                                        </span>
                                        0 Comment
                                    </li>
                                </ul>

                                <a href="blog/stretch-your-way-to-better-health.html" class="title">
                                    Stretch Your Way to Better Health
                                </a>

                                <a href="blog/stretch-your-way-to-better-health.html"
                                class="common_btn white_btn common_btn_2">
                                    Read More <i class="far fa-long-arrow-right"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Repeat same pattern for others -->

                </div>
            </div>
        </section>
        <!--============================
            SOCIAL MEDIA START
        =============================-->
        <!--============================
            SOCIAL MEDIA END
        =============================-->
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
