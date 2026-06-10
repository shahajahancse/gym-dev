@extends('font_layout.layouts')

@section('GYM', 'Privacy Policy || WebSolutionUS')

@section('title')
    Privacy Policy
@endsection

@section('content')

    <!--============================
        BREADCRUMBS START
    =============================-->
    <section class="wsus__breadcrumb wow fadeInUp" style="background:url('{{ asset('uploads/website-images/breadcrumb-image.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wsus___breadcrumb_text">
                        <h1>Privacy Policy</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/welcome') }}"><i class="fas fa-home-lg-alt"></i>Home</a>
                            </li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMBS END
    =============================-->

    <!--=============================
        PRIVACY POLICY START
    ==============================
    -->
    <section class="wsus__terms_condition pt_75 xs_pt_55 pb_95 xs_pb_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp">
                    <div class="wsus__privacy_policy_text">
                        <h2>1. Our Privacy</h2>
                        <p>At Gridex, we are committed to protecting your privacy and personal information. This privacy policy explains how we collect, use, and share your information when you use our services. By using our services, you agree to the terms of this privacy policy.</p>
                        <p>We take your privacy seriously and are committed to protecting your personal information. This privacy policy explains how we collect, use, and share your information when you use our services.</p>
                        <h2>2. Information We Collect</h2>
                        <p>We may collect information about you when you use our services, such as your name, email address, postal address, phone number, and payment information. We may also collect information about your device and how you use our services, including your IP address, browser type, and operating system.</p>
                        <p>3.1 We collect this information in several ways, including when you provide it to us directly, when you use our services, and when we obtain it from third-party sources. We may also use cookies and similar technologies to collect information about your browsing behavior and preferences.</p>
                        <p>3.2 When you use our services, and when we obtain it from third-party sources. We may also use cookies and similar technologies to collect information about your browsing behavior.</p>
                        <p>3.3 Including when you provide it to us directly, when you use our services, and when we obtain it from third-party sources. We may also use cookies and similar technologies to collect information about your browsing behavior and preferences.</p>
                        <h2>3. How We Use Your Information</h2>
                        <p>We use your information to provide and improve our services, to communicate with you, and to personalize your experience. Specifically, we may use your information for the following purposes:</p>
                        <ul>
                            <li>To process your transactions and provide customer support</li>
                            <li>To send you newsletters, promotions, and other marketing communications</li>
                            <li>To personalize your experience and recommend products and services based on your interests and preferences</li>
                            <li>To conduct research and analysis to improve our services and offerings</li>
                            <li>To comply with legal and regulatory requirements</li>
                        </ul>
                        <h2>4. How We Share Your Information</h2>
                        <p>We may share your information with third-party service providers who help us provide our services, such as payment processors and customer support providers. We may also share your information with our partners and affiliates for marketing purposes. In some cases, we may share your information with government authorities or law enforcement agencies to comply with legal requirements or protect our rights and property.</p>
                        <p>We will never sell your information to third parties.</p>
                        <h2>5. How we protect your information</h2>
                        <p>We take reasonable measures to protect your information from unauthorized access, disclosure, alteration, and destruction. Specifically, we implement physical, technical, and administrative safeguards to protect your information. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee the security of your information.</p>
                        <h2>6. Your Rights and reservation</h2>
                        <p>You have certain rights regarding your personal information, including the right to access and correct your information, the right to request that we delete your information, and the right to opt-out of receiving marketing communications from us. If you wish to exercise any of these rights, please contact us at [contact email].</p>
                        <h2>7. Updates to This Policy</h2>
                        <p>We may update this privacy policy from time to time. We will notify you of any material changes by posting the updated policy on our website. We encourage you to review this policy periodically to stay informed about how we are protecting your information.</p>
                        <h2>8. Contact Us</h2>
                        <p>If you have any questions about this policy, please contact us at <a href="{{ url('/contact') }}">[Contact Us]</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
