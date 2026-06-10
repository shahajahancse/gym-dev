@extends('font_layout.layouts')

@section('title')
    Contact || WebSolutionUS
@endsection

@section('GYM', 'Contact || WebSolutionUS')

@section('content')
    <section class="wsus__breadcrumb wow fadeInUp" style="background:url('{{ asset('uploads/website-images/breadcrumb-image.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wsus___breadcrumb_text">
                        <h1>Contact</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/welcome') }}"><i class="fas fa-home-lg-alt"></i>Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wsus__contact mt_120 xs_mt_100">
        <div class="row">
            <div class="col-xxl-8">
                <div class="wsus__contact_contant">
                    <div class="wsus__section_headeing heading_left mb_25 wow fadeInUp">
                        <h2>Ask your QUESTION HERE</h2>
                    </div>
                    <form action="https://fitnes.websolutionus.com/send-contact-message" id="contact-form"
                        class="wsus__contact_form wow fadeInUp">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="wsus__contact_form_input">
                                    <input type="text" placeholder="Name*" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="wsus__contact_form_input">
                                    <input type="email" placeholder="Email *" name="email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="wsus__contact_form_input">
                                    <input type="text" placeholder="Phone Number" name="phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="wsus__contact_form_input">
                                    <input type="text" placeholder="Subject *" name="subject">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__contact_form_input">
                                    <textarea rows="4" placeholder="Message *" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__contact_form_input mt_15">
                                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__contact_form_button">
                                    <button type="submit" class="common_btn common_btn_2">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="wsus__contact_address">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 wow fadeInUp">
                                <div class="wsus__contact_item">
                                    <span><img src="{{ asset('website/images/location_icon_3.png') }}" alt="location"
                                        class="img-fluid w-100"></span>
                                    <h6>Address</h6>
                                    <p>7232 Broadway 308, Jackson Heights, 11372,</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp">
                                <div class="wsus__contact_item">
                                    <span><img src="{{ asset('website/images/mail_icon_2.png') }}" alt="email"
                                        class="img-fluid w-100"></span>
                                    <h6>Email</h6>
                                    <a href="mailto:fitnes@mail.com">
                                        fitnes@mail.com<br>
                                        training@mail.com
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp">
                                <div class="wsus__contact_item">
                                    <span><img src="{{ asset('website/images/call_icon_2.png') }}" alt="location"
                                        class="img-fluid w-100"></span>
                                    <h6>Phone</h6>
                                    <a href="tel:123-456-7890">
                                        123-456-7890<br>
                                        123-456-7890
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 wow fadeInUp">
                <div class="wsus__contact_img">
                    <img src="{{ asset('uploads/custom-images/wsus-img-2024-06-06-03-57-00-7044.jpg') }}"
                        alt="contact" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </section>
    <section class="wsus__contact_map_area mt_115 xs_mt_95">
        <div class="row">
            <div class="col-xl-12 wow fadeInUp">
                <div class="wsus__contact_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.6811392045543!2d-73.89520842481936!3d40.7470412713884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f01328248b3%3A0x62300784dd275f96!2s7232%20Broadway%20%23%20308%2C%20Flushing%2C%20NY%2011372%2C%20USA!5e0!3m2!1sen!2sbd!4v1717646173942!5m2!1sen!2sbd" width="600" height="450" class="border-0"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection


