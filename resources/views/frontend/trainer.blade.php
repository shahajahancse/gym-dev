@extends('font_layout.layouts')

@section('title')
    Trainer || WebSolutionUS
@endsection

@section('GYM', 'Trainer || WebSolutionUS')

@section('content')
    <section class="wsus__breadcrumb wow fadeInUp" style="background:url('{{ asset('uploads/website-images/breadcrumb-image.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wsus___breadcrumb_text">
                        <h1>Our Trainer</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/welcome') }}"><i class="fas fa-home-lg-alt"></i>Home</a>
                            </li>
                            <li>Our Trainer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wsus__trainer_page mt_95 xs_mt_75 mb_120 xs_mb_100">
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                <div class="wsus__single_trainer">
                    <img src="{{ asset('uploads/custom-images/tt1.png') }}" alt="Trainer" class="img-fluid w-100">
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
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                <div class="wsus__single_trainer">
                    <img src="{{ asset('uploads/custom-images/tt2.png') }}" alt="Trainer" class="img-fluid w-100">
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
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                <div class="wsus__single_trainer">
                    <img src="{{ asset('uploads/custom-images/tt3.png') }}" alt="Trainer" class="img-fluid w-100">
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
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                <div class="wsus__single_trainer">
                    <img src="{{ asset('uploads/custom-images/tt4.png') }}" alt="Trainer" class="img-fluid w-100">
                    <div class="text">
                        <a href="trainer/eden-howard.html" class="title">Eden Howard</a>
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
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                <div class="wsus__single_trainer">
                    <img src="{{ asset('uploads/custom-images/wsus-img-2024-10-08-11-47-27-8717.jpg') }}" alt="Trainer" class="img-fluid w-100">
                    <div class="text">
                        <a href="trainer/chava-britt.html" class="title">Chava Britt</a>
                        <p>Powerlifting Coach</p>
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
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                <div class="wsus__single_trainer">
                    <img src="{{ asset('uploads/custom-images/tt6.png') }}" alt="Trainer" class="img-fluid w-100">
                    <div class="text">
                        <a href="trainer/miriam-mathews.html" class="title">Miriam Mathews</a>
                        <p>Physiologist</p>
                    </div>
                    <ul>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                <div class="wsus__single_trainer">
                    <img src="{{ asset('uploads/custom-images/tt7.png') }}" alt="Trainer" class="img-fluid w-100">
                    <div class="text">
                        <a href="trainer/nelle-odom.html" class="title">Nelle Odom</a>
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
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp">
                <div class="wsus__single_trainer">
                    <img src="{{ asset('uploads/custom-images/tt8.png') }}" alt="Trainer" class="img-fluid w-100">
                    <div class="text">
                        <a href="trainer/amos-rowland.html" class="title">Amos Rowland</a>
                        <p>Personal Trainer</p>
                    </div>
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="wsus__pagination mt_60">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled" aria-disabled="true">
                                <a class="page-link"><i class="fal fa-angle-left"></i></a>
                            </li>
                            <li class="page-item" aria-current="page"><a class="page-link active">1</a></li>
                            <li class="page-item"><a class="page-link" href="trainer4658.html?page=2">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="trainer4658.html?page=2" rel="next">
                                    <i class="fal fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
