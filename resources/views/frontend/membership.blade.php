@extends('font_layout.layouts')
@section('title')
    Gym | Fitness
@endsection

    @section('content')
    
        <section class="wsus__breadcrumb wow fadeInUp" style="background:url(uploads/website-images/breadcrumb-image.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wsus___breadcrumb_text">
                            <h1>Pricing</h1>
                            <ul>
                                <li>
                                    <a href="index.html"><i
                                        class="fas fa-home-lg-alt"></i>Home</a>
                                </li>
                                <li>Pricing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wsus__pricing wsus__pricing_page pt_110 xs_pt_90 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 m-auto wow fadeInUp">
                        <div class="wsus__section_headeing mb_45">
                            <h2>FITNESS CLASSES PRICING PLAN</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 m-auto text-center">
                        <div class="wsus__pricing_nav">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-homeprice-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-homeprice" type="button" role="tab"
                                        aria-controls="pills-homeprice"
                                        aria-selected="true"><span>Monthly</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profileprice-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profileprice" type="button" role="tab"
                                        aria-controls="pills-profileprice"
                                        aria-selected="false"><span>Yearly</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-homeprice" role="tabpanel"
                        aria-labelledby="pills-homeprice-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 wow fadeInUp">
                                <div
                                    class="wsus__single_pricing ">
                                    <h3>Basic Plan</h3>
                                    <ul>
                                        <li>Access to Core Services</li>
                                        <li>Standard In-Person Support</li>
                                        <li>Access to Basic Resources</li>
                                        <li>Basic Practice Materials</li>
                                        <li>Regular Class Updates</li>
                                        <li>Basic Participant Management</li>
                                    </ul>
                                    <div class="bottom">
                                        <h2>
                                            $100.00
                                        </h2>
                                        <a href="javascript:;" class="common_btn white_btn common_btn_2 join-now" data-plan="monthly"
                                            data-plan_id="1"> Join Now <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp">
                                <div
                                    class="wsus__single_pricing ">
                                    <h3>Standard Plan</h3>
                                    <ul>
                                        <li>Access to Core Services</li>
                                        <li>Expanded Resources</li>
                                        <li>Enhanced Practice Materials</li>
                                        <li>Priority Class Updates</li>
                                        <li>Locker Facility</li>
                                        <li>Training Workshops</li>
                                    </ul>
                                    <div class="bottom">
                                        <h2>
                                            $200.00
                                        </h2>
                                        <a href="javascript:;" class="common_btn white_btn common_btn_2 join-now" data-plan="monthly"
                                            data-plan_id="2"> Join Now <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp">
                                <div
                                    class="wsus__single_pricing ">
                                    <h3>Premium Plan</h3>
                                    <ul>
                                        <li>Access to Core Services</li>
                                        <li>Priority In-Person Support</li>
                                        <li>Exclusive Resources</li>
                                        <li>Advanced Practice Materials</li>
                                        <li>Early Access to New Classes</li>
                                        <li>Locker Facility</li>
                                    </ul>
                                    <div class="bottom">
                                        <h2>
                                            $300.00
                                        </h2>
                                        <a href="javascript:;" class="common_btn white_btn common_btn_2 join-now" data-plan="monthly"
                                            data-plan_id="3"> Join Now <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profileprice" role="tabpanel" aria-labelledby="pills-profileprice-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div
                                    class="wsus__single_pricing ">
                                    <h3>Basic Plan</h3>
                                    <ul>
                                        <li>Access to Core Services</li>
                                        <li>Standard In-Person Support</li>
                                        <li>Access to Basic Resources</li>
                                        <li>Basic Practice Materials</li>
                                        <li>Regular Class Updates</li>
                                        <li>Basic Participant Management</li>
                                    </ul>
                                    <div class="bottom">
                                        <h2>$1,000.00</h2>
                                        <a href="javascript:;" class="common_btn white_btn common_btn_2 join-now" data-plan="annually"
                                            data-plan_id="1"> Join Now <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div
                                    class="wsus__single_pricing ">
                                    <h3>Standard Plan</h3>
                                    <ul>
                                        <li>Access to Core Services</li>
                                        <li>Expanded Resources</li>
                                        <li>Enhanced Practice Materials</li>
                                        <li>Priority Class Updates</li>
                                        <li>Locker Facility</li>
                                        <li>Training Workshops</li>
                                    </ul>
                                    <div class="bottom">
                                        <h2>$2,000.00</h2>
                                        <a href="javascript:;" class="common_btn white_btn common_btn_2 join-now" data-plan="annually"
                                            data-plan_id="2"> Join Now <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div
                                    class="wsus__single_pricing ">
                                    <h3>Premium Plan</h3>
                                    <ul>
                                        <li>Access to Core Services</li>
                                        <li>Priority In-Person Support</li>
                                        <li>Exclusive Resources</li>
                                        <li>Advanced Practice Materials</li>
                                        <li>Early Access to New Classes</li>
                                        <li>Locker Facility</li>
                                    </ul>
                                    <div class="bottom">
                                        <h2>$3,000.00</h2>
                                        <a href="javascript:;" class="common_btn white_btn common_btn_2 join-now" data-plan="annually"
                                            data-plan_id="3"> Join Now <i class="far fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wsus__testimonial_2 service_det_testimonial pt_110 xs_pt_90 pb_115 xs_pb_95">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft">
                        <div class="wsus__section_headeing heading_left mb_50">
                            <h2>What our members say</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wsus__testimonial_2_area">
                <div class="row testimonial_2_slider">
                    <div class="col-xl-4 wow fadeInUp">
                        <div class="wsus__testimonial_2_item">
                            <div class="text">
                                <p>
                                    &quot;Joining this gym was the best decision I ever made for my health. I’ve lost 30 pounds in the past six months, thanks to the amazing trainers and supportive community. The personalized workout plans and nutrition advice made all the difference. I feel stronger, healthier, and more confident than ever!&quot;
                                </p>
                            </div>
                            <div class="wsus__testimonial_2_reviewer">
                                <div class="wsus__slider_small_img">
                                    <img src="uploads/custom-images/wsus-img-2024-06-03-10-11-15-3072.jpg" alt="review" class="img-fluid w-100">
                                </div>
                                <div class="name">
                                    <h4 class="title">Rizvi</h4>
                                    <p>Managing Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp">
                        <div class="wsus__testimonial_2_item">
                            <div class="text">
                                <p>
                                    &quot;As someone who’s always been into sports, I was looking for a gym that could push me to the next level. The strength and conditioning programs here are top-notch. I’ve increased my squat and deadlift by 50 pounds each, and my overall athletic performance has skyrocketed. The trainers.&quot;
                                </p>
                            </div>
                            <div class="wsus__testimonial_2_reviewer">
                                <div class="wsus__slider_small_img">
                                    <img src="uploads/custom-images/wsus-img-2024-08-15-10-28-12-5637.png" alt="review" class="img-fluid w-100">
                                </div>
                                <div class="name">
                                    <h4 class="title">James R.</h4>
                                    <p>Professional Athlete</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp">
                        <div class="wsus__testimonial_2_item">
                            <div class="text">
                                <p>
                                    &quot;What I love most about this gym is the sense of community. Everyone here is friendly and supportive, and the group classes are always a blast. The instructors are enthusiastic and knowledgeable, and they always find a way to keep the workouts fun and challenging. This place challenging&quot;
                                </p>
                            </div>
                            <div class="wsus__testimonial_2_reviewer">
                                <div class="wsus__slider_small_img">
                                    <img src="uploads/custom-images/wsus-img-2024-06-03-10-14-03-3508.jpg" alt="review" class="img-fluid w-100">
                                </div>
                                <div class="name">
                                    <h4 class="title">Emily K.</h4>
                                    <p>School Teacher</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp">
                        <div class="wsus__testimonial_2_item">
                            <div class="text">
                                <p>
                                    &quot;I was really intimidated to join a gym because I’m a complete beginner, but the staff here made me feel comfortable from day one. They took the time to explain everything and designed a workout plan that was perfect for my level. Now, I’m lifting weights and doing exercises I never thought!&quot;
                                </p>
                            </div>
                            <div class="wsus__testimonial_2_reviewer">
                                <div class="wsus__slider_small_img">
                                    <img src="uploads/custom-images/wsus-img-2024-08-15-10-24-56-5280.png" alt="review" class="img-fluid w-100">
                                </div>
                                <div class="name">
                                    <h4 class="title">Mike T.</h4>
                                    <p>Software Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp">
                        <div class="wsus__testimonial_2_item">
                            <div class="text">
                                <p>
                                    &quot;I’ve been working with a personal trainer here for the past year, and the results have been incredible. My trainer really listens to my goals and challenges me in ways I didn’t think were possible. I’ve built muscle, improved my endurance, and even fixed some old injuries. I can’t recommend!&quot;
                                </p>
                            </div>
                            <div class="wsus__testimonial_2_reviewer">
                                <div class="wsus__slider_small_img">
                                    <img src="uploads/custom-images/wsus-img-2024-08-15-10-26-21-6301.png" alt="review" class="img-fluid w-100">
                                </div>
                                <div class="name">
                                    <h4 class="title">Linda A.</h4>
                                    <p>Business Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

