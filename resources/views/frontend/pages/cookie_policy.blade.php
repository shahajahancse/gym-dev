@extends('font_layout.layouts')

@section('GYM', 'Cookie Policy || WebSolutionUS')

@section('title')
    Cookie Policy
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
                        <h1>Cookie Policy</h1>
                        <ul>
                            <li>
                                <a href="{{ url('/welcome') }}"><i class="fas fa-home-lg-alt"></i>Home</a>
                            </li>
                            <li>Cookie Policy</li>
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
        COOKIE POLICY START
    ==============================
    -->
    <section class="wsus__terms_condition pt_75 xs_pt_55 pb_95 xs_pb_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow fadeInUp">
                    <div class="wsus__privacy_policy_text">
                        <h2>1. Use of Service</h2>
                        <p>You are granted a non-exclusive, non-transferable, revocable license to use the Service for your personal or commercial use. You agree to use the Service only for lawful purposes and in a way that does not infringe on the rights of others. looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus</p>
                        <h2>2. Your Account</h2>
                        <p>Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material ("Content"). You are responsible for the Content that you post on or through the Service, including its legality, reliability, and appropriatenes.</p>
                        <p>Some parts of the Service are billed on a subscription basis. You will be billed in advance on a recurring subscription that you choose.</p>
                        <h2>3. Payment And Subscription</h2>
                        <p>Some parts of the Service may require payment before access is granted. If you choose to subscribe to any of our paid services, you agree to pay all fees associated with the subscription. Payment may be made through a third- party payment processor, and you agree to provide accurate payment information.</p>
                        <p>Taxes: If you wish to purchase any product or service made available through the Service ("Purchase"), you may be asked to supply certain information relevant to your Purchase including, without limitation, your name, address, and payment information.</p>
                        <p>Charges: Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material.</p>
                        <h2>4. Intellectual Property</h2>
                        <p>All content on the Service, including but not limited to text, graphics, logos, images, and software, is the property of [Your Company] or its licensors and is protected by copyright and other intellectual property laws. You may not copy, reproduce, distribute, or create derivative works based on the content without our prior written consent.</p>
                        <ul>
                            <li>Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material ("Content").</li>
                            <li>You are responsible for the Content that you post on or through the Service, including its legality, reliability, and appropriateness.</li>
                            <li>For any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</li>
                        </ul>
                        <h2>5. User content</h2>
                        <p>You are solely responsible for any content you upload, submit, or otherwise make available on the Service ("User Content"). You agree not to post User Content that is illegal, defamatory, or infringes on the rights of others. We reserve the right to remove any User Content that violates these Terms.</p>
                        <h2>6. Limitation of Liability</h2>
                        <p>In no event shall [Your Company] be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in connection with the use of the Service, including but not limited to lost profits, loss of data, or any other damages, whether based on contract, tort, strict liability, or any other theory of liability.</p>
                        <h2>7. our Termination</h2>
                        <p>We reserve the right to terminate or suspend your access to the Service at any time, with or without cause, without prior notice or liability.</p>
                        <ul>
                            <li>To process your transactions and provide customer support</li>
                            <li>To send you newsletters, promotions, and other marketing communications</li>
                            <li>To personalize your experience and recommend products and services based on your interests and preferences</li>
                            <li>To conduct research and analysis to improve our services and offerings</li>
                            <li>To comply with legal and regulatory requirements</li>
                        </ul>
                        <h2>8. country Governing Law</h2>
                        <p>These Terms shall be governed by and construed in accordance with the laws of [Your Country/State], without regard to its conflict of law provisions. the content, privacy policies, or practices of any third-party web sites or services. You further acknowledge and agree that [Your Company] shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services</p>
                        <h2>9. Contact Us</h2>
                        <p>If you have any questions about these Terms, please contact us at <a href="{{ url('/contact') }}">[Contact Us]</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
