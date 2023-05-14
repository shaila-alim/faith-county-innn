@extends('layouts.website')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image: url(assets/img/page-bg-contact.jpg);">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href=""{{route('home')}}"">
                            Home
                        </a>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Contact Area -->
    <section class="main-contact-area contact-info-area contact-info-three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Contact Us</span>
                <h2>Drop us a message for any query</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque quibusdam deleniti porro praesentium. Aliquam minus quisquam velit in at nam.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-wrap contact-pages">
                        <div class="contact-form contact-form-mb">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control textarea-hight" id="message" cols="30" rows="4" required data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
                                            Send Message
                                            <i class="flaticon-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-contact-info">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us:</h3>
                                <a href="mailto:contact@faithcountyinn.com">contact@faithcountyinn.com</a>
                                <a href="mailto:bookings@faithcountyinn.com">bookings@faithcountyinn.com</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-contact-info">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us:</h3>
                                <a href="tel:+(91)755–4924050">Tel. + (91) 0755 – 4924050</a>
                                <a href="tel:+(91)7898008888">Mobile + (91) 78980 08888</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-contact-info">
                                <i class="bx bx-location-plus"></i>
                                <h3>FAITH County Inn</h3>
                                <a href="#">1 KM Ahead of Ratibad Square<br> Bhopal-Sehore Road, Bhopal (M.P.)</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-contact-info">
                                <i class="bx bx-location-plus"></i>
                                <h3>Group Corporate Office</h3>
                                <a href="#">B-3, Windsor, Phase 1<br> Chunabhatti, Bhopal - 462016 (M.P.)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Map Area  -->
    <div class="map-area pb-100">
        <div class="container">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117357.42674709499!2d77.29299086668053!3d23.191374703568012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c43d77ed3452f%3A0x999eb45e9e15cccb!2sFaith%20Cricket%20Club!5e0!3m2!1sen!2sin!4v1607587902172!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <!-- End Map Area -->

@endsection

