@extends('layouts.website')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area" style="background-image: url(assets/img/page-bg-mgmt.jpg);">
    <div class="container">
        <div class="page-title-content">
            <h2>Management</h2>
            <ul>
                <li>
                    <a href="{{route('home')}}">
                        Home
                    </a>
                </li>

                <li>Management</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Explore Area -->
<section class="explore-area ptb-100">
    <div class="container">
        <div class="section-title">
            <!-- <span>Explore</span> -->
            <h2>Chairman's Message</h2>
        </div>
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="explore-content ml-30">
                    <h2>Greetings for The Day…!!!</h2>
                    <p align="justify">I, as the Chairman of Faith Group of Companies feel thrilled, happy & proud to present Faith Cricket Club Bhopal.</p>

                    <p align="justify">The Idea of this nature is a challenge ofcourse in itself, but this venture is very close to my heart. Hence I personally involved myself and my team of very efficient young energetic architects, engineers, technician, managers, curators and grounds men to create this challenging project. They all worked in perfect sportsman spirit and great enthusiasm to deliver this dream as a state of art, a pioneer advance high standard cricket facility complex in a very short span of time.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="explore-img">
                    <img src="assets/img/chairman.jpg" alt="Image">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Explore Area -->
@endsection
