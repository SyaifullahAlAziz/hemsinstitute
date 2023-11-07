@extends('layout.index')
@section('content')
    <section class="hero-wrap hero-wrap-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Karir</h1>
                    <p class="breadcrumbs"><span class="mr-2">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Karir <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4"> <span class="flaticon-analysis"></span> Lowongan Kerja Saat Ini</h2>
                    <hr>
                    <div class="row mt-1">

                        <div class="icon mt-2 d-flex justify-content-center align-items-center">
                            @php
                                $data = DB::table('tb_karir')->count();
                            @endphp
                            @if ($data == 0)
                                <div class="services text-center">
                                    <div class="icon mt-2 d-flex align-items-left"></div>
                                    <div class="text media-body">
                                        <h3 style="text-align: left">Lowongan Belum Tersedia</h3>
                                    </div>
                                </div>
                            @endif
                            <div class="row" style="background-color:; padding-right: 5px; padding-left: 5px;">
                                @foreach ($karir as $data)
                                    <div class="col-lg-4 d-flex">
                                        <div class="services text-center">

                                            <div class="text bg-white ">
                                                <h3 style="text-align: left">
                                                    <a href="{{ route('detail-karir', $data->id) }}">
                                                        {{ isset($data->judul) ? $data->judul : 'Lowongan Belum Tersedia' }}
                                                    </a>
                                                </h3>
                                                <p style="text-align: left; font-size:15px">
                                                    <a href="{{ route('detail-karir', $data->id) }}">
                                                        {!! isset($data->perusahaan) ? $data->perusahaan : '--------------' !!}
                                                    </a>
                                                </p>
                                                <p style="text-align: left; font-size:15px">
                                                    <i class="fa fa-map-marker" style="font-size:20px; color: #750909;"></i>
                                                    {!! isset($data->alamat) ? $data->alamat : '--------------' !!}
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
