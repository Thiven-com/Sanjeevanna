@extends('layouts.website')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('website') }}/images/background/5-1.jpg)">
        <div class="auto-container">
            <h2>Contact Us</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Form Section -->
    <section class="contact-form-section"
        style="background-image:url({{ asset('website') }}/images/background/contact-1.png)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2>Get In Touch</h2>
                <div class="text">Do you have anything in your mind to let us know? Kindly don't delay to connect to us by
                    means of our contact form.</div>
            </div>

            <div class="row clearfix">

                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Contact Form -->
                        <div class="contact-form">

                            <!--Contact Form-->
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="Your name" required="">
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="email" placeholder="Email address" required="">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                                class="txt">Submit now</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Office Address :</strong><br> <a
                                    href="https://maps.google.com/?q=NO+74+5th+Cross+Narayanpura+Bengaluru+560016"
                                    target="_blank">
                                    No. 74, 5th Cross, Narayanpura, Bengaluru - 560016
                                </a></li>
                        </ul>


                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Branch Address :</strong><br> <a
                                    href="https://www.google.com/maps/search/?api=1&query=No.+193/P16,+Srirama+Road,+Bidarahalli,+Bengaluru+560049"
                                    target="_blank">
                                    No. 193/P16, Srirama Road, Bidarahalli, Bengaluru - 560049
                                </a>
                            </li>
                        </ul>


                        <!-- Contact Info List -->
                        <ul class="contact-info-list">
                            <li><strong>Phone : </strong><a href="tel:+91 9663605853">+91 9663605853</a></li>
                            <li><strong>Email : </strong><a
                                    href="mailto:sanjeevanna.co@gmail.com">sanjeevanna.co@gmail.com</a></li>
                        </ul>


                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Form Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="outer-container">
            <div class="map-outer">
                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                    data-hue="#ffc400" data-title="Melbourne Australia"
                    data-icon-path="{{ asset('website') }}/images/icons/map-marker.png"
                    data-content="(1800) 456 7890 <br> Mon-Sat: 7.00an - 9.00pm">
                </div>
            </div>
        </div>
    </section>


    <!-- End Map Section -->

@endsection