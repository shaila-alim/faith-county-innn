@extends('layouts.website')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image: url(assets/img/page-bg-gallery.jpg);">
        <div class="container">
            <div class="page-title-content">
                <h2>Faith County Inn </h2>
                <ul>
                    <li>
                        <a href=""{{route('home')}}"">
                            Home
                        </a>
                    </li>
                    <li> Photo Gallery</li>

                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Gallery Area -->
    <section class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Gallery</span>
                <h2>Our Specials Room</h2>
                <p>Stay in Comfor and Luxury. Enjoy your stay with us.</p>
            </div>
            <div class="gallery-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shorting-menu">
                            <button class="filter" data-filter="all">
                                <i class='bx bx-plus' ></i>
                                All
                            </button>
                            <button class="filter" data-filter=".certified">
                                <i class='bx bx-bookmark-plus'></i>
                                Lawns
                            </button>
                            <button class="filter" data-filter=".used">
                                <i class='bx bx-user-circle'></i>
                                Property
                            </button>
                            <button class="filter" data-filter=".new">
                                <i class='bx bx-news' ></i>
                                Rooms
                            </button>
                        </div>
                    </div>
                </div>
                <div class="shorting">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mix certified used">
                            <div class="single-gallery">
                                <div class="gallery-image bg-1">
                                    <div class="price-wrap">
											<span class="price-text">
												From
											</span>
                                        <span class="price">
												10,000/-
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>(Premium)</span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Russian Wood Log House
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mix used new">
                            <div class="single-gallery">
                                <div class="gallery-image bg-2">
                                    <div class="price-wrap">
											<span class="price-text">
												From
											</span>
                                        <span class="price">
												7,500/-
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>(Premium)</span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Lawn Facing Split Bedroom
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mix new certified">
                            <div class="single-gallery">
                                <div class="gallery-image bg-3">
                                    <div class="price-wrap">
											<span class="price-text">
												From
											</span>
                                        <span class="price">
												2,800/-
											</span>
                                    </div>
                                </div>
                                <div class="gallery-content">
                                    <span>(Premium)</span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            Pool Facing Master Bedroom
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mix used">
                            <div class="single-gallery">
                                <div class="gallery-image bg-4">
                                    <!-- <div class="price-wrap">
                                        <span class="price-text">
                                            Price
                                        </span>
                                        <span class="price">
                                            $180.00
                                        </span>
                                    </div> -->
                                </div>
                                <div class="gallery-content">
                                    <span>(Restaurent)</span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            The Captain's Cafe
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mix new">
                            <div class="single-gallery">
                                <div class="gallery-image bg-5">
                                    <!-- <div class="price-wrap">
                                        <span class="price-text">
                                            From
                                        </span>
                                        <span class="price">
                                            $150.00
                                        </span>
                                    </div> -->
                                </div>
                                <div class="gallery-content">
                                    <span>(New)</span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            The Pavillio
                                        </a>
                                    </h3>
                                    <a class="read-more" href="room-details-left-sidebar.html">
                                        View More
                                        <i class='bx bx-right-arrow-alt bx-fade-right'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mix new">
                            <div class="single-gallery">
                                <div class="gallery-image bg-6">
                                    <!-- <div class="price-wrap">
                                        <span class="price-text">
                                            Price
                                        </span>
                                        <span class="price">
                                            $150.00
                                        </span>
                                    </div> -->
                                </div>
                                <div class="gallery-content">
                                    <span>(Restaurant)</span>
                                    <h3>
                                        <a href="room-details-left-sidebar.html">
                                            The Mango Tree
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
