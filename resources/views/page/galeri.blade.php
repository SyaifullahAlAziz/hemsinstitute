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
                            <li>Galeri</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Galeri -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Galeri</h2>
                    {{-- <div class="section_subtitle">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu Vestibulum
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
        
        <div class="row about_row">

            <!-- About Item -->
            @foreach ($galeri as $data)
            <div class="col-lg-4 about_col about_col_left">
                <div class="about_item">
                    <div class="about_item_image mb-2 ml-10"><img src="{{ asset('images/galeri/'.$data->foto) }}"
                            width="380px" height="280px" alt=""></div>
                    {{-- <div class="about_item_title"><a href="#">Our Stories</a></div>
                    <div class="about_item_text">
                        <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet
                            adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                    </div> --}}
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
