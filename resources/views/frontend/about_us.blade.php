@extends('font_layout.layouts')
@section('title')
Gym | Fitness
@endsection

@section('content')

        <!--  =================  About Us ============-->
        <section class="wsus__breadcrumb wow fadeInUp" style="background:url({{ asset('uploads/website-images/about1.png') }})">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wsus___breadcrumb_text">
                            <h1>About</h1>
                            <ul>
                                <li>
                                    <a href="{{ url('/welcome') }}"><i
                                        class="fas fa-home-lg-alt"></i>Home</a>
                                </li>
                                <li>About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="wsus__about_us pt_120 xs_pt_100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5 col-xl-5 wow fadeInLeft">
                        <div class="wsus__about_us_img">
                            <img src="{{ asset('uploads/custom-images/wsus-img-2024-06-06-03-35-12-4629.png') }}" alt="About Us" class="img-fluid w-100">
                            <h3>Fitnes</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-6 wow fadeInRight">
                        <div class="wsus__about_us_text">
                            <div class="wsus__section_heading_2 heading_left mb_20">
                                <h2>ABOUT FITNES</h2>
                            </div>
                            <p>With over 4100 online GYM Training videos and meditations, you’ll find something to match your mood.</p>
                            <p><br>
                            </p>
                            <p>With over 4100 online GYM Training videos and meditations, you’ll find something to match your mood, schedule and energy. Stay flexible with a monthly membership – your first 04 days are free Or save with an annual membership.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wsus__why_choose_us pt_120 xs_pt_90">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-7 col-xl-6 wow fadeInUp">
                        <div class="wsus__why_choose_us_text">
                            <div class="wsus__section_heading_2 heading_left mb_20">
                                <h2>WHY CHOOSE US?</h2>
                            </div>
                            <p>Ditch the ordinary, sculpt your extraordinary. Choose Fitnes. Unleash your potential with expert trainers, top-tier equipment, and a thriving community.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 wow fadeInRight">
                        <div class="wsus__why_choose_us_img">
                            <img src="{{ asset('uploads/custom-images/abtb1.png') }}" alt="Why Choose" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="wsus__join_event wsus__join_event_2 wsus__join_event_3 pt_120 xs_pt_100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="wsus__video_button wow fadeInUp"
                            style="background: url('{{ asset('uploads/custom-images/wsus-img-2024-06-06-03-47-13-5227.jpg') }}');">
                            <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
                                href="https://youtu.be/dOFZq66cGBs?si=TtJ4iKjmYRuaexyt">
                            <i class="fas fa-play"></i>
                            </a>
                            <div class="wsus__join_event_2_text wow fadeInRight">
                                <div class="wsus__section_heading_2 heading_left mb_20">
                                    <h2>FITNES SUPPORT YOU</h2>
                                </div>
                                <p>With over 4100 online GYM Training videos and meditations, you’ll find something to match your mood.</p>
                                <p><br>
                                </p>
                                <p>With over 4100 online GYM Training videos and meditations, you’ll find something to match your mood, schedule and energy. Stay flexible with a monthly membership – your first 04 days are free Or save with an annual membership.</p>
                                <a href="#"
                                    class="common_btn common_btn_2">More Details<i
                                    class="far fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wsus__counter mt_120 xs_mt_60 pb_120 xs_pb_100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-7 col-xl-6 wow fadeInUp">
                        <div class="wsus__counter_text">
                            <div class="wsus__section_headeing heading_left mb_20">
                                <h2>
                                    EXERCISING  BODY &amp; MIND
                                </h2>
                            </div>
                            <p class="description">
                            <p>Ditch the ordinary, sculpt your extraordinary. Choose Fitnes. Unleash your potential with expert trainers, top-tier equipment, and a thriving community.</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-xl-5 wow fadeInRight">
                        <div class="wsus__counter_img">
                            <img src="{{ asset('uploads/custom-images/wsus-img-2024-06-06-03-48-23-5008.png') }}" alt="counter" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wsus__trainer pt_110 xs_pt_90 pb_120 xs_pb_100"
            style="background: url({{ asset('uploads/custom-images/wsus-img-2024-06-06-03-49-37-7372.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 m-auto wow fadeInUp">
                        <div class="wsus__section_headeing mb_25">
                            <h2>
                                START TRAINING WITH ME
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">
                            <img src="{{ asset('uploads/custom-images/at3.png') }}" alt="Trainer" class="img-fluid w-100">
                            <div class="text">
                                <a href="trainer/carson-williams.html" class="title">Carson Williams</a>
                                <p>Personal Trainer</p>
                            </div>
                            <ul>
                                <li><a href="https://www.facebook.com/">
                                    <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.instagram.com/">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">
                            <img src="{{ asset('uploads/custom-images/at2.png') }}" alt="Trainer" class="img-fluid w-100">
                            <div class="text">
                                <a href="trainer/flavia-stuart.html" class="title">Flavia Stuart</a>
                                <p>Strength Coach</p>
                            </div>
                            <ul>
                                <li><a href="https://www.facebook.com/">
                                    <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.instagram.com/">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp">
                        <div class="wsus__single_trainer">
                            <img src="{{ asset('uploads/custom-images/at1.png') }}" alt="Trainer" class="img-fluid w-100">
                            <div class="text">
                                <a href="trainer/leilani-rosales.html" class="title">Leilani Rosales</a>
                                <p>Strength Coach</p>
                            </div>
                            <ul>
                                <li><a href="https://www.facebook.com/">
                                    <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.instagram.com/">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt_60 wow fadeInUp">
                        <a class="common_btn" href="callto:1234567890"><i
                            class="fab fa-whatsapp"></i>Talk to a Specialist</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="gray_bg_area pb_120 xs_pb_100">
            <section class="wsus__call_to_action mt_95 xs_mt_75 mb_120 xs_mb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-3 wow fadeInUp">
                            <div class="wsus__call_to_action_item">
                                <span>
                                <img src="{{ asset('uploads/custom-images/counter/wsus-img-2024-06-06-04-09-12-8241.png') }}" alt="CTA" class="img-fluid">
                                </span>
                                <p>148 Gym</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 wow fadeInUp">
                            <div class="wsus__call_to_action_item">
                                <span>
                                <img src="{{ asset('uploads/custom-images/counter/wsus-img-2024-06-06-04-09-57-2829.png') }}" alt="CTA" class="img-fluid">
                                </span>
                                <p>32 Cities</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 wow fadeInUp">
                            <div class="wsus__call_to_action_item">
                                <span>
                                <img src="{{ asset('uploads/custom-images/counter/wsus-img-2024-06-06-04-10-26-9925.png') }}" alt="CTA" class="img-fluid">
                                </span>
                                <p>Equipment</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 wow fadeInUp">
                            <div class="wsus__call_to_action_item">
                                <span>
                                <img src="{{ asset('uploads/custom-images/counter/wsus-img-2024-06-06-04-10-54-2467.png') }}" alt="CTA" class="img-fluid">
                                </span>
                                <p>Program</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section class="wsus__testimonial">
                <div class="container">
                    <div class="wsus__testimonial_area pt_85 pb_90"
                        style="background:url('{{ asset('uploads/custom-images/wsus-img-2024-06-06-03-51-33-7681.png') }}') center center / cover no-repeat;">
                        <div class="row slider-for">
                            <div class="col-xl-12 wow fadeInUp">
                                <div class="wsus__testimonial_content">
                                    <p>&quot;Joining this gym was the best decision I ever made for my health. I’ve lost 30 pounds in the past six months, thanks to the amazing trainers and supportive community. The personalized workout plans and nutrition advice made all the difference. I feel stronger, healthier, and more confident than ever!&quot;</p>
                                    <h6>Rizvi</h6>
                                    <span>Managing Director</span>
                                </div>
                            </div>
                            <div class="col-xl-12 wow fadeInUp">
                                <div class="wsus__testimonial_content">
                                    <p>&quot;As someone who’s always been into sports, I was looking for a gym that could push me to the next level. The strength and conditioning programs here are top-notch. I’ve increased my squat and deadlift by 50 pounds each, and my overall athletic performance has skyrocketed. The trainers.&quot;</p>
                                    <h6>James R.</h6>
                                    <span>Professional Athlete</span>
                                </div>
                            </div>
                            <div class="col-xl-12 wow fadeInUp">
                                <div class="wsus__testimonial_content">
                                    <p>&quot;What I love most about this gym is the sense of community. Everyone here is friendly and supportive, and the group classes are always a blast. The instructors are enthusiastic and knowledgeable, and they always find a way to keep the workouts fun and challenging. This place challenging&quot;</p>
                                    <h6>Emily K.</h6>
                                    <span>School Teacher</span>
                                </div>
                            </div>
                            <div class="col-xl-12 wow fadeInUp">
                                <div class="wsus__testimonial_content">
                                    <p>&quot;I was really intimidated to join a gym because I’m a complete beginner, but the staff here made me feel comfortable from day one. They took the time to explain everything and designed a workout plan that was perfect for my level. Now, I’m lifting weights and doing exercises I never thought!&quot;</p>
                                    <h6>Mike T.</h6>
                                    <span>Software Developer</span>
                                </div>
                            </div>
                            <div class="col-xl-12 wow fadeInUp">
                                <div class="wsus__testimonial_content">
                                    <p>&quot;I’ve been working with a personal trainer here for the past year, and the results have been incredible. My trainer really listens to my goals and challenges me in ways I didn’t think were possible. I’ve built muscle, improved my endurance, and even fixed some old injuries. I can’t recommend!&quot;</p>
                                    <h6>Linda A.</h6>
                                    <span>Business Consultant</span>
                                </div>
                            </div>
                        </div>
                        <div class="wsus_small_slider_img_area mt_40 wow fadeInUp">
                            <div class="row slider-nav">
                                <div class="col-xl-4">
                                    <div class="wsus__slider_small_img">
                                        <img src="{{ asset('uploads/custom-images/wsus-img-2024-06-03-10-11-15-3072.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="wsus__slider_small_img">
                                        <img src="{{ asset('uploads/custom-images/wsus-img-2024-08-15-10-28-12-5637.png') }}" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="wsus__slider_small_img">
                                        <img src="{{ asset('uploads/custom-images/wsus-img-2024-06-03-10-14-03-3508.jpg') }}" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="wsus__slider_small_img">
                                        <img src="{{ asset('uploads/custom-images/wsus-img-2024-08-15-10-24-56-5280.png') }}" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="wsus__slider_small_img">
                                        <img src="{{ asset('uploads/custom-images/wsus-img-2024-08-15-10-26-21-6301.png') }}" alt="img"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
        <!--============================
            SOCIAL MEDIA START
        =============================-->
