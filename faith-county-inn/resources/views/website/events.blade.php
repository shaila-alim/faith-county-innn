@extends('layouts.website')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Events</h2>
                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            Home
                        </a>
                    </li>
                    <li>Pages</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Explore Area -->
    <section class="explore-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Explore</span>
                <h2>Wonderful Events</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="explore-img">
                        <img src="assets/img/explore-img.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="explore-content ml-30">
                        <h2>P</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet reprehenderit ratione ad perspiciatis repudiandae iste ipsam temporibus sit quo! Incidunt, necessitatibus fugiat ut dignissimos pariatur odit natus ipsum! Obcaecati iste ipsam temporibus sit quo! Incidunt, necessitatibus Obcaecati iste ipsam temporibus.</p>

                        <p>Konin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nim ad minim veniam, quis nostrud exercitation. dolor sit amet, consectetur adipisicing quis nostrud exercitation.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Explore Area -->

@endsection
