@extends('font_layout.layouts')
@section('title')
Gym | Fitness
@endsection

@section('content')

        <!--============================
            MENU END
        =============================-->

        <section class="wsus__breadcrumb wow fadeInUp" style="background:url('{{ asset('uploads/website-images/breadcrumb-image.jpg') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wsus___breadcrumb_text">
                            <h1>Blogs</h1>
                            <ul>
                                <li>
                                    <a href="{{ url('/welcome') }}"><i
                                        class="fas fa-home-lg-alt"></i>Home</a>
                                </li>
                                <li>Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wsus__blog_grid mt_95 xs_mt_75 mb_120 xs_mb_100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b1.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/stretch-your-way-to-better-health.html" class="title">
                                    Stretch Your Way to Better Health
                                    </a>
                                    <a href="blog/stretch-your-way-to-better-health.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b2.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/why-you-should-incorporate-it.html" class="title">
                                    Why You Should Incorporate It
                                    </a>
                                    <a href="blog/why-you-should-incorporate-it.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b3.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/a-guide-to-making-healthier-choices.html" class="title">
                                    A Guide to Making Healthier Choices
                                    </a>
                                    <a href="blog/a-guide-to-making-healthier-choices.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b4.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/understanding-the-role-of-fiber.html" class="title">
                                    Understanding the Role of Fiber
                                    </a>
                                    <a href="blog/understanding-the-role-of-fiber.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b5.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/fuel-your-body-for-optimal-health.html" class="title">
                                    Fuel Your Body for Optimal Health
                                    </a>
                                    <a href="blog/fuel-your-body-for-optimal-health.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b6.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/beginners-strength-training-with-kettlebells.html" class="title">
                                    Beginner’s Strength Training with Kettlebells
                                    </a>
                                    <a href="blog/beginners-strength-training-with-kettlebells.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b7.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/beginners-strength-training-with-dumbbells.html" class="title">
                                    Beginner’s Strength Training with Dumbbells
                                    </a>
                                    <a href="blog/beginners-strength-training-with-dumbbells.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b8.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/beginners-strength-training-routine.html" class="title">
                                    Beginner’s Strength Training Routine
                                    </a>
                                    <a href="blog/beginners-strength-training-routine.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-4 wow fadeInUp">
                        <div class="wsus__blog_3_item">
                            <img src="{{ asset('website/images/b9.png') }}" alt="blog" class="img-fluid w-100">
                            <p><span><img src="{{ asset('website/images/clock_2.png') }}" alt="clock"
                                class="img-fluid w-100"></span>
                                12 August, 2024
                            </p>
                            <div class="wsus__blog_3_overly">
                                <div class="text">
                                    <a href="blog/beginners-cardio-routine.html" class="title">
                                    Beginner’s Cardio Routine
                                    </a>
                                    <a href="blog/beginners-cardio-routine.html"
                                        class="common_btn white_btn common_btn_2">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp vis-animation">
                        <div class="wsus__pagination mt_60">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled" aria-disabled="true">
                                        <a class="page-link"><i class="fal fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item" aria-current="page"><a
                                        class="page-link active">1</a></li>
                                    <li class="page-item"><a class="page-link"
                                        href="blogs4658.html?page=2">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="blogs4658.html?page=2" rel="next">
                                        <i class="fal fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

