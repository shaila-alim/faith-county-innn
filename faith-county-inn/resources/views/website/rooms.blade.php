@extends('layouts.website')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image: url(assets/img/page-bg-rooms.jpg);">
        <div class="container">
            <div class="page-title-content">
                <h2>Stay In Comfort</h2>
                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            Home
                        </a>
                    </li>
                    <li>Our Rooms</li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Gallery Area -->
    <section class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Welcome</span>
                <h2>Our Specials Room</h2>
                <p>Fascinating Rooms & Log House</p>
            </div>
            <div class="gallery-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shorting-menu">
                            <button class="filter" data-filter="all">
                                <i class='bx bx-plus' ></i>
                                All Rooms
                            </button>
                            <button class="filter" data-filter=".russian">
                                <i class='bx bx-plus' ></i>
                                Russian Wood Log House
                            </button>
                            <button class="filter" data-filter=".pool">
                                <i class='bx bx-bookmark-plus'></i>
                                Pool Facing Master Bedroom
                            </button>
                            <button class="filter" data-filter=".lawn">
                                <i class='bx bx-user-circle'></i>
                                Lawn Facing Split Bedroom
                            </button>

                        </div>
                    </div>
                </div>
                <div class="shorting">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 mix russian">
                            <div class="single-gallery">
                                <div class="gallery-image bg-1">
                                    <div class="price-wrap">
											<span class="price-text">
												Tariff
											</span>
                                        <span class="price">
												Rs.10,000/Night + GST
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>Russian</span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Wood Log House
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-6 mix lawn">
                            <div class="single-gallery">
                                <div class="gallery-image bg-5">
                                    <div class="price-wrap">
											<span class="price-text">
												Tariff
											</span>
                                        <span class="price">
												From INR.4300/Night + GST
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>Lawn Facing </span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Split Bedroom
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 mix pool">
                            <div class="single-gallery">
                                <div class="gallery-image bg-3">
                                    <div class="price-wrap">
											<span class="price-text">
												Tariff
											</span>
                                        <span class="price">
												From INR.4500/Night + GST
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>Pool Facing </span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Master Bedroom
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-4 col-md-6 mix russian">
                            <div class="single-gallery">
                                <div class="gallery-image bg-2">
                                    <div class="price-wrap">
											<span class="price-text">
												Tariff
											</span>
                                        <span class="price">
												Rs.10,000/Night + GST
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>Russian</span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Wood Log House
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-6 mix lawn">
                            <div class="single-gallery">
                                <div class="gallery-image bg-6">
                                    <div class="price-wrap">
											<span class="price-text">
												Tariff
											</span>
                                        <span class="price">
												From INR.4300/Night + GST
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>Lawn Facing </span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Split Bedroom
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 mix pool">
                            <div class="single-gallery">
                                <div class="gallery-image bg-4">
                                    <div class="price-wrap">
											<span class="price-text">
												Tariff
											</span>
                                        <span class="price">
												From INR.4500/Night + GST
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>Pool Facing </span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Master Bedroom
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>





                        <div class="col-12">
                            <a class="default-btn" href="room-grid-view.html">
                                View More
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Area -->



@endsection
