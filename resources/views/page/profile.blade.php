@extends('layout.index')
@section('title')
Profil Hem's Institute
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/about.css') }}">
<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Profil</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About -->

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Hem's Institute</h2>
                    <div class="section_subtitle">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu Vestibulum
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row about_row">

            <!-- About Item -->
            {{-- <div class="col-lg-4 about_col about_col_left">
                <div class="about_item">
                    <div class="about_item_image"><img src="{{ asset('frontend/images/about_1.jpg') }}" alt=""></div>
                    <div class="about_item_title"><a href="#">Our Stories</a></div>
                    <div class="about_item_text">
                        <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet
                            adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                    </div>
                </div>
            </div> --}}

            <!-- About Item -->
            @foreach ($profil as $data)
            <div class="col-lg-4 about_col about_col_middle" style="color:black !important;">
                <div class="about_item">
                    {{-- <div class="about_item_image"><img src="{{ asset('frontend/images/about_2.jpg') }}" alt=""></div> --}}
                    <div class="about_item_title"><a href="#">{{ $data->judul }}</a></div>
                    <div class="about_item_text">
                        <p>{!! $data->isi !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-4 about_col about_col_middle" style="color:black;">
                <div class="about_item">
                    {{-- <div class="about_item_image"><img src="{{ asset('frontend/images/about_2.jpg') }}" alt=""></div> --}}
                    <div class="about_item_title"><a href="#">Syarat Pendaftaran</a></div>
                    <div class="about_item_text">
                        <p>
                            <li>Mengisi formulir pendaftaran</li>
                            <li>Biaya pendaftaran Rp 750.000</li>
                            <li>Menyerahkan pas foto 3x4 2 lembar</li>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Team -->

<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('frontend/images/team_background.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Pengurus</h2>
                    <div class="section_subtitle">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum
                            feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row team_row">


            <!-- Team Item -->
            @foreach ($pengurus as $data)
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="{{ asset('images/pengurus/'.$data->foto) }}" alt=""></div>
                    <div class="team_body" style="width:100%; height:225px;">
                        <div class="team_title"><a href="#">{{ $data->nama }}</a></div>
                        <div class="team_subtitle">{{ $data->jabatan }}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <br><br><br><br><br>

        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Trainer</h2>
                    <div class="section_subtitle">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum
                            feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row team_row">


            <!-- Team Item -->
            @foreach ($trainer as $data)
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="{{ asset('images/pengurus/'.$data->foto) }}" alt=""></div>
                    <div class="team_body" style="width:100%; height:225px;">
                        <div class="team_title"><a href="#">{{ $data->nama }}</a></div>
                        <div class="team_subtitle">{{ $data->jabatan }}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
