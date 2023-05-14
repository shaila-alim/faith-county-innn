
<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,600,700&display=swap">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i&display=swap">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,500,500i,600,600i,700,700i,800&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Beautiful Fonts CSS -->
    <link rel="stylesheet" href="/assets/css/beautiful-fonts.css">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- Owl Magnific CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="/assets/boxicons/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="/assets/css/date-picker.css">
    <!-- Odometer CSS-->
    <link rel="stylesheet" href="/assets/css/odometer.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">

    <!-- TITLE -->
    <title>FAITH County Inn</title>
</head>

<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Ecorik Navbar Area -->
<div class="eorik-nav-style fixed-top">
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{route('home')}}" class="logo">
                <img src="/assets/img/mobile-manu-logo.png" alt="Logo">
            </a>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="/assets/img/logo-fci.png" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle active">
                                    Home

                                </a>

                            </li> -->
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    The Group
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('about')}}" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('management')}}" class="nav-link">Management</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('rooms')}}" class="nav-link dropdown-toggle">
                                    Explore Stay
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('rooms')}}" class="nav-link">Rooms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('tariff')}}" class="nav-link">Tariff</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('rooms')}}" class="nav-link dropdown-toggle">
                                    Weddings
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('pre-wedding')}}" class="nav-link">Pre Wedding Shoots</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Wedding Packages</a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="{{route('events')}}" class="nav-link dropdown-toggle">
                                    Events
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item">
                                        <a href="{{route('events')}}" class="nav-link">Annual Meet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('events')}}" class="nav-link">Product Launch</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('events')}}" class="nav-link">Seminars/Workshops</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('events')}}" class="nav-link">Weddings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('events')}}" class="nav-link">Birthdays/Anniversaries</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('events')}}" class="nav-link">Engagement/Sangeet</a>
                                    </li>

                                </ul>
                            </li>


                            <li class="nav-item">
                                <a href="{{route('gallery')}}" class="nav-link dropdown-toggle">
                                    Gallery

                                </a>

                            </li>


                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link dropdown-toggle">
                                    Contact

                                </a>

                            </li>
                        </ul>
                        <!-- Start Other Option -->
                        <div class="others-option">
                            <a class="call-us" href="tel:+917898008888">
                                <i class="bx bx-phone-call bx-tada"></i>
                                +91 7898008888
                            </a>

                            <a class="navbar-brand" href="{{route('home')}}">
                                <img src="/assets/img/logo-fcc.png" alt="Logo">
                            </a>
                        </div>
                        <!-- End Other Option -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Ecorik Navbar Area -->

<!-- Start Sidebar Modal -->
<!-- <div class="sidebar-modal">
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                        <a href="index.html">
                            <img src="/assets/img/home-one/logo.jpg" alt="Logo">
                        </a>
                    </h2>
                </div>
                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">About FAITH Group</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus eum laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore voluptate, autem pariatur? Dicta pariatur.</p>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Additional Links</h3>
                        <ul>
                            <li>
                                <a href="log-in.html">Log In</a>
                            </li>
                            <li>
                                <a href="sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Contact Info</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="bx bx-location-plus"></i>
                                Address
                                <span>Ratibad Main Road, Bhopal, Madhya PRadesh</span>
                            </li>
                            <li>
                                <i class="bx bx-envelope"></i>
                                Email
                                <span>hello@faithcountyinn.com</span>
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i>
                                Phone
                                <span>+91-464-679, +91-497-466</span>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Connect With Us</h3>
                        <ul class="social-list">
                            <li>
                                <a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Sidebar Modal -->
         <!--start main-->

     @yield('content')

        <!-- End Main -->

<!-- Start Footer Area -->
<footer class="footer-top-area pt-140 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="section-title">
            <h2>FAITH County Inn</h2>
            <!-- <p>Newsletr dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreonsectetur adipiscinet dolore.</p> -->
        </div>
        <div class="footer-tops-area pb-60">
            <div class="row">
                <!-- Start Subscribe Area -->
                <!-- <div class="subscribe-wrap">
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="input-tracking" placeholder="Your Email" name="EMAIL" required autocomplete="off">

                        <button class="default-btn active" type="submit">
                            Subscribe
                            <i class="flaticon-right"></i>
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div> -->
                <!-- End Subscribe Area -->
            </div>
        </div>
        <div class="footer-middle-area pt-60">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <a href="{{route('home')}}">
                            <img src="/assets/img/footer-logo.png" alt="Image">
                        </a>
                        <p>FAITH County Inn has started with a dream to create a best place for active people. Initiated by the prestegious FAITH Group, the resort has so many activities to do, be it your Family Functions or a Corporate Event.</p>
                        <ul class="social-icon">
                            <li>
                                <a href="#">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-pinterest-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="{{route('about')}}">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    The Group
                                </a>
                            </li>
                            <li>
                                <a href="{{route('rooms')}}">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Rooms
                                </a>
                            </li>
                            <li>
                                <a href="{{route('events')}}">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Events
                                </a>
                            </li>
                            <li>
                                <a href="{{route('gallery')}}">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Gallery
                                </a>
                            </li>

                            <li>
                                <a href="{{route('contact')}}">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Services</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Restaurant
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Swimming Pool
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Wellness & Spa
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Conference Room
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="right-icon bx bx-chevrons-right"></i>
                                    Events
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget">
                        <h3>Contact Info</h3>
                        <ul class="information">
                            <li class="address">
                                <i class="flaticon-maps-and-flags"></i>
                                <span>Address</span>
                                FAITH Cricket Club<br>
                                Ratibad, Bhopal - 462044
                            </li>
                            <li class="address">
                                <i class="flaticon-call"></i>
                                <span>Phone</span>
                                <a href="tel:+917898008888">
                                    +91 78980 08888
                                </a>
                            </li>
                            <li class="address">
                                <i class="flaticon-envelope"></i>
                                <span>Email</span>
                                <a href="mailto:faithcountyinn@gmail.com">
                                    faithcountyinn@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copy-right">
                        <p>Copyright <i class="bx bx-copyright"></i> 2020-2021 <a href="{{route('home')}}">FAITH County Inn</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="designed">
                        <p><i class='bx bx-heart'></i> <a href="#" target="_blank">Solwin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <img src="/assets/img/white-shape-bottom.png" alt="Image">
    </div>
</footer>
<!-- End Footer Area -->



</body>


<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-chevrons-up bx-fade-up'></i>
    <i class='bx bx-chevrons-up bx-fade-up'></i>
</div>
<!-- End Go Top Area -->


<!-- Jquery Slim JS -->
<script src="/assets/js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- Meanmenu JS -->
<script src="/assets/js/jquery.meanmenu.js"></script>
<!-- Wow JS -->
<script src="/assets/js/wow.min.js"></script>
<!-- Owl Carousel JS -->
<script src="/assets/js/owl.carousel.js"></script>
<!-- Owl Magnific JS -->
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select JS -->
<script src="/assets/js/jquery.nice-select.min.js"></script>
<!-- Appear JS -->
<script src="/assets/js/jquery.appear.js"></script>
<!-- Odometer JS -->
<script src="/assets/js/odometer.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="/assets/js/bootstrap-datepicker.min.js"></script>
<!-- Parallax JS -->
<script src="/assets/js/parallax.min.js"></script>
<!-- Mixitup JS -->
<script src="/assets/js/jquery.mixitup.min.js"></script>
<!-- Form Ajaxchimp JS -->
<script src="/assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator JS -->
<script src="/assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="/assets/js/contact-form-script.js"></script>
<!-- Map JS FILE -->
<!--  <script src="/assets/js/map.js"></script> -->
<!-- Custom JS -->
<script src="/assets/js/custom.js"></script>

</html>
