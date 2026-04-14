@extends('font_layout.layouts')
@section('title')
    Gym | Fitness
@endsection

    @section('content')

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


