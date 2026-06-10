@extends('font_layout.layouts')

@section('title')
    Service || WebSolutionUS
@endsection

@section('GYM', 'Service || WebSolutionUS')

@section('content')
    <section class="wsus__breadcrumb wow fadeInUp" style="background:url('{{ asset('uploads/website-images/breadcrumb-image.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wsus___breadcrumb_text">
                        <h1>Service</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/welcome') }}"><i class="fas fa-home-lg-alt"></i>Home</a>
                            </li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wsus__programs_page mt_105 xs_mt_85 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 wow fadeInUp">
                    <div class="wsus__section_headeing heading_left mb_25">
                        <h2>Get Our Services For you</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4 wow fadeInUp">
                <div class="wsus__program_item">
                    <img src="{{ asset('uploads/custom-images/gym_service/s1.png') }}" alt="Program" class="img-fluid">
                    <div class="text">
                        <a href="service/personal-training.html" class="title">Personal Training</a>
                        <a href="service/personal-training.html" class="arrow_button"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInUp">
                <div class="wsus__program_item">
                    <img src="{{ asset('uploads/custom-images/gym_service/s2.png') }}" alt="Program" class="img-fluid">
                    <div class="text">
                        <a href="service/wellness-services.html" class="title">Wellness Services</a>
                        <a href="service/wellness-services.html" class="arrow_button"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInUp">
                <div class="wsus__program_item">
                    <img src="{{ asset('uploads/custom-images/gym_service/s3.png') }}" alt="Program" class="img-fluid">
                    <div class="text">
                        <a href="service/aquatic-fitness.html" class="title">Aquatic Fitness</a>
                        <a href="service/aquatic-fitness.html" class="arrow_button"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInUp">
                <div class="wsus__program_item">
                    <img src="{{ asset('uploads/custom-images/gym_service/s6.png') }}" alt="Program" class="img-fluid">
                    <div class="text">
                        <a href="service/mind-body-services.html" class="title">Mind-Body Services</a>
                        <a href="service/mind-body-services.html" class="arrow_button"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInUp">
                <div class="wsus__program_item">
                    <img src="{{ asset('uploads/custom-images/gym_service/s5.png') }}" alt="Program" class="img-fluid">
                    <div class="text">
                        <a href="service/general-fitness.html" class="title">General Fitness</a>
                        <a href="service/general-fitness.html" class="arrow_button"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeInUp">
                <div class="wsus__program_item">
                    <img src="{{ asset('uploads/custom-images/gym_service/s4.png') }}" alt="Program" class="img-fluid">
                    <div class="text">
                        <a href="service/specialized-training.html" class="title">Specialized Training</a>
                        <a href="service/specialized-training.html" class="arrow_button"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
