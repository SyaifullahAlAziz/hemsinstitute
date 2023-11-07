@extends('layout.index')
@section('content')
    <section class="hero-wrap hero-wrap-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Detail Karir</h1>
                    <p class="breadcrumbs"><span class="mr-2">Home <i class="ion-ios-arrow-forward"></i></span> <span
                            class="mr-2">Karir <i class="ion-ios-arrow-forward"></i></span> <span>Detail Karir <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <h2 class="mb-3">{{ $detail->judul }}</h2>

                    <h5>
                        <p style="text-emphasis-color: black; bold">
                            <b> <?= $detail->perusahaan ?> </b>
                        </p>
                    </h5>
                    <h6>
                        <p><b><?= $detail->alamat ?> </b></p>
                    </h6>
                    <hr>
                    <p style="text-color: black; ">
                        <?= $detail->detail ?>
                    </p>
                </div> <!-- .col-md-8 -->


                <!-- END COL -->
            </div>
        </div>
    </section>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
