
@extends('layouts.website')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area" style="background-image: url(/assets/img/page-bg-abt.jpg);">
    <div class="container">
        <div class="page-title-content">
            <h2>About Us</h2>
            <ul>
                <li>
                    <a href="{{route('home')}}">
                        Home
                    </a>
                </li>
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
            <span>A Venture By</span>
            <h2>FAITH Group Of Companies</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="explore-img">
                    <img src="/assets/img/explore-img.png" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="explore-content ml-30">
                    <h2>Our Story</h2>
                    <p>Faith Cricket Club Cricket Bhopal envisions to become the foremost nurturing grounds for young and emerging cricket talent in the country.</p>

                    <p>Faith Cricket Club reckons that a cricketer’s journey from a ‘potential cricketer’ to a ‘successful cricketer’ passes through expert coaches ,facilities and infrastructure matching international levels, and a reliable emotional and mental support system that allows him/her to bloom.</p>

                    <p>We take full responsibility as a dedicated team to provide not just the quintessential skills for a super performance but also teaching the ‘secrets’ of achieving peak mental and physical performance- always with unyielding integrity.</p>
                </div>
            </div>
        </div>


        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="explore-content ml-30">
                    <h2>Our Vision</h2>
                    <p>Enrichment for all is our basic vision. Cricketing talent cannot be created but discovered and once done it can only be nurtured. All play differently, think differently, behave differently and of course have different talents. Therefore, our principle while training is strictly ‘one-to-one coaching’.</p>

                    <h2>Our Mission</h2>
                    <ul>
                        <li>- Make efforts for identifying talented cricketers.</li>
                        <li>- Promote, develop and nurture talent in young cricketers.</li>
                        <li>- Provide professional life-skill guidance to students.</li>
                        <li>- Furnish students with international cricketer experience within the academy.</li>
                        <li>- Yield players who deserve to wear The Team Blue Jersey.</li>
                    </ul>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="explore-img">
                    <img src="/assets/img/abt-side.jpg" alt="Image">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Explore Area -->
@endsection
