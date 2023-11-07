@extends('layout.index')
@section('content')
@section('title')
Pesona Wisata Mandeh
@endsection
<main>

    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->

    @php
    $kontak = DB::table('tb_kontak')
    ->where('jenis_kontak', 'whatsapp')
    ->first();
    @endphp

    <!-- peoples-visit Start -->
    <div class="peoples-visit dining-padding-top" style="margin-top:50px; margin-bottom:50px;">
        <!-- Single Left img -->
        <div class="single-visit left-img">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="visit-caption">
                            <span>Payment</span>
                            <h3>How to Booking?</h3>
                            <p>
                                <li> Transfer ke :  </li>
                                <li> BRI : 541601020402533 ( laila arfah) </li>
                                <li> BNI : 1591075361 (laila arfah) </li>
                                <li> BANK NAGARI : 0400.0210.32499-4 (aditya warman) </li>
                            </p>

                            <a href="https://api.whatsapp.com/send?phone={{ $kontak->kontak }}" class="btn"
                                style="color:white; background-color:#1ad03f; padding:15px 30px;">
                                <i class="fab fa-whatsapp"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- peoples-visit End -->

</main>
@endsection
