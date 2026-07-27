<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sanjeevanna and Company Enterprises</title>
    <!-- Stylesheets -->
    <link href="{{ asset('website') }}/css/bootstrap-1.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/style-1.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/responsive-1.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('website') }}/images/sanjeevlogo1.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('website') }}/images/sanjeevlogo1.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset ('website') }}/js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <header class="main-header header-style-one">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <div class="top-left clearfix">
                        <div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now : <a
                                href="tel:+91 9663605853" class="number">+91 9663605853</a></div>

                    </div>
                    <div class="top-right clearfix">
                        <!-- Info List -->
                        <ul class="info-list">
                            <li><a href="{{ route('about') }}">Our Story</a></li>
                            <!-- <li><a href="blog-1.html">Inspiration</a></li> -->
                            <li class="quote"><a href="{{ route('contact') }}">Get Free Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container">
                    <div class="auto-container clearfix">
                        <!--Info-->
                        <div class="logo-outer">
                            <div class="logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('website') }}/images/sanjeevlogo (1).png" alt="" title=""
                                        style="margin-top: 10px;"></a>
                            </div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler For Mobile-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Togg le Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu-1"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="{{ route('home') }}">Home</a>
                                            <!-- <ul>
                                                <li><a href="index-1.html">Home page 01</a></li>
                                                <li><a href="index-2-1.html">Home page 02</a></li>
                                                <li><a href="index-3-1.html">Home page 03</a></li>
                                                <li><a href="index-4-1.html">Home page 04</a></li>
                                                <li><a href="index-5-1.html">Home page 05</a></li>
                                                <li class="dropdown"><a href="index-1.html">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index-1.html">Header Style One</a></li>
                                                        <li><a href="index-2-1.html">Header Style Two</a></li>
                                                        <li><a href="index-3-1.html">Header Style Three</a></li>
                                                        <li><a href="index-4-1.html">Header Style Four</a></li>
                                                        <li><a href="index-5-1.html">Header Style Five</a></li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li class="dropdown"><a href="{{ route('about') }}">About us</a>

                                        </li>
                                        <li class="dropdown"><a href="{{ route('service') }}">Services</a>
                                            <!-- <ul>
                                                <li><a href="services-dark-1.html">Services Layout 01</a></li>
                                                <li><a href="services-light-1.html">Services Layout 02</a></li>
                                                <li><a href="residental-interior-1.html">Residential Interior</a></li>
                                                <li><a href="commercial-interior-1.html">Commercial Interior</a></li>
                                                <li><a href="office-interior-1.html">Office Design</a></li>
                                                <li><a href="hospitality-design-1.html">Hospitality Design</a></li>
                                                <li><a href="modern-furniture-1.html">Modern Furniture</a></li>
                                                <li><a href="modular-kitchen-1.html">Modular Kitchen</a></li>
                                                <li><a href="wardrobe-1.html">Wardrobe</a></li>
                                                <li><a href="false-celling-design-1.html">False Celling Design</a></li>
                                            </ul> -->
                                        </li>
                                        <!-- <li class="dropdown"><a href="projects-classic-1.html">Projects</a>
                                            <ul>
                                                <li><a href="projects-classic-1.html">Projects Classic</a></li>
                                                <li><a href="projects-masonry-1.html">Project Masonry</a></li>
                                                <li><a href="projects-fullwidth-1.html">Project Full Screen</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="blog-1.html">Blog</a>
                                            <ul>
                                                <li><a href="blog-1.html">Blog</a></li>
                                                <li><a href="blog-2-1.html">blog 2 column</a></li>
                                                <li><a href="blog-detail-1.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="shop-1.html">Shop</a>
                                            <ul>
                                                <li><a href="shop-1.html">Main shop page</a></li>
                                                <li><a href="product-detail-1.html">Product Detail Page</a></li>
                                                <li><a href="cart-page-1.html">Cart Page</a></li>
                                                <li><a href="checkout-1.html">Checkout</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <!-- Outer Box -->
                            <div class="outer-box clearfix">
                                <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('website') }}/images/sanjeevlogo (1).png"
                                alt="Sanjeevanna and Company Enterprises" title=""></a></div>
                    <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->


        @yield('content')


        <!--Main Footer-->
        <footer class="main-footer">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--big column-->
                        <div class="big-column col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="{{ route('home') }}"><img
                                                    src="{{ asset('website') }}/images/sanjeevlogo (1).png" alt=""></a>
                                        </div><br>
                                        <div class="text">
                                            Sanjeevanna and Company Enterprises provides complete renovation solutions,
                                            including POP false ceiling, electrical, painting, glass, carpentry, and
                                            plumbing works for residential, office, and commercial spaces.
                                        </div>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="footer-column col-lg-2 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Quick links</h2>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="{{ route('home') }}">Home</a></li>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="{{ route('service') }}">Services</a></li>
                                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                                <!-- <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms & Conditionis</a></li>
                                                <li><a href="#">Faq</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Services</h2>
                                        <div class="widget-content">
                                            <ul class="list">
                                                <li><a href="{{ route('service') }}">Carpentry Works</a></li>
                                                <li><a href="{{ route('service') }}">Plumbing Works</a></li>
                                                <li><a href="{{ route('service') }}">Glass Works</a></li>
                                                <li><a href="{{ route('service') }}">Renovation</a></li>
                                                <!-- <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Terms & Conditionis</a></li>
                                                <li><a href="#">Faq</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>







                                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Contact Info</h2>
                                        <div class="widget-content">

                                            <ul class="list">

                                                <li><a href="tel:+91 9663605853" class="contact-number">+91
                                                        9663605853</a></li>
                                                <li>
                                                    <a href="https://maps.google.com/?q=NO+74+5th+Cross+Narayanpura+Bengaluru+560016"
                                                        target="_blank">
                                                        No. 74, 5th Cross, Narayanpura, Bengaluru, 29-Karnataka - 560016
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="mailto:sanjeevanna.co@gmail.com">
                                                        sanjeevanna.co@gmail.com
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--big column-->


                        <!-- <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="footer-widget contact-widget">
                                        <h2>Contact Info</h2>
                                        <div class="widget-content">
                                            <a href="tel:+91 9663605853" class="contact-number">+91
                                                9663605853</a>
                                            <ul>
                                                <li>
                                                    <a href="https://maps.google.com/?q=NO+74+5th+Cross+Narayanpura+Bengaluru+560016"
                                                        target="_blank">
                                                        No. 74, 5th Cross, Narayanpura, Bengaluru - 560016
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="mailto:sanjeevanna.co@gmail.com">
                                                        sanjeevanna.co@gmail.com
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->

                        <!--Footer Column-->
                        <!-- <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                    <div class="footer-widget newsletter-widget">
                                        <h2>Services</h2>
                                        <div class="text">Subscribe to receive updates on our latest renovation
                                            projects, services, and special offers.</div> -->
                        <!-- Newsletter Form -->
                        <!-- <div class="newsletter-form">
                                            <form method="post" action="contact.html">
                                                <div class="form-group">
                                                    <input type="email" name="email" value=""
                                                        placeholder="Enter your email address" required="">
                                                    <button type="submit" class="theme-btn btn-style-one"><span
                                                            class="txt">Subscribe</span></button>
                                                </div>
                                            </form>
                                        </div> -->
                        <!-- </div>
                                </div> -->



                    </div>
                </div>

                <!--Footer Bottom-->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="footer-bottom clearfix">
                        <div class="pull-left">
                            <div class="copyright">
                                &copy; Copyright {{ date('Y') }} Sanjeevanna and Company Enterprises. All Rights
                                Reserved.
                            </div>
                        </div>

                        

                        <div class="pull-right">
                            <a href="tel:+91 9663605853" class="purchase">Call Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required="">
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">POP False Ceiling</a></li>
                    <li><a href="#">Renovation Services</a></li>
                    <li><a href="#">Electrical Works</a></li>
                    <li><a href="#">Painting Works</a></li>
                    <li><a href="#">Glass Works</a></li>
                    <li><a href="#">Carpentry Works</a></li>
                    <li><a href="#">Plumbing Works</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!--Scroll to top-->
    <script src="{{ asset('website') }}/js/jquery-1.js"></script>
    <script src="{{ asset('website') }}/js/popper.min-1.js"></script>
    <script src="{{ asset('website') }}/js/jquery-ui-1.js"></script>
    <script src="{{ asset('website') }}/js/bootstrap.min-1.js"></script>
    <script src="{{ asset('website') }}/js/jquery.fancybox-1.js"></script>
    <script src="{{ asset('website') }}/js/isotope-1.js"></script>
    <script src="{{ asset('website') }}/js/owl-1.js"></script>
    <script src="{{ asset('website') }}/js/wow-1.js"></script>
    <script src="{{ asset('website') }}/js/validate-1.js"></script>
    <script src="{{ asset('website') }}/js/appear-1.js"></script>
    <script src="{{ asset('website') }}/js/scrollbar-1.js"></script>
    <script src="{{ asset('website') }}/js/script-1.js"></script>
    <!--Google Map APi Key-->
    <script src="../maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{ asset('website') }}/js/map-script-1.js"></script>




    <style>
        .main-footer .widgets-section .row {
            display: flex;
            flex-wrap: wrap;
        }

        .main-footer .footer-column {
            margin-bottom: 30px;
        }
    </style>
</body>

</html>