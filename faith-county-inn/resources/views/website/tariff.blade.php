
@extends('layouts.website')

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area" style="background-image: url(assets/img/page-bg-abt.jpg);">
    <div class="container">
        <div class="page-title-content">
            <h2>Room Tariff</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>Tariff</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Explore Area -->
<section class="explore-area ptb-100">
    <div class="container">
        <div class="section-title">
            <!-- <span>A Venture By</span> -->
            <h2>Room Tariffs</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-12">

                <center>
                    <h4>Rate applicable	from 1st Jan till 31st March 2021</h4>
                    <h4>Rates	for	Rooms	with	Breakfast only</h4>
                </center>
                <table class="table table-hover">
                    <thead>

                    <tr>
                        <th scope="col">Room Catagory</th>
                        <th scope="col">Weekdays (Sunday-Thursday)</th>
                        <th scope="col">Weekend (Friday-Saturday)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Faith	Pool	View	Room</td>
                        <td>4500	+	Taxes</td>
                        <td>5000	+	Taxes</td>
                    </tr>
                    <tr>
                        <td>Faith	Garden	View	Room</td>
                        <td>4300	+	Taxes</td>
                        <td>4700	+	Taxes</td>
                    </tr>

                    </tbody>
                </table>

            </div>

        </div>



    </div>
</section>
<!-- End Explore Area -->

@endsection


