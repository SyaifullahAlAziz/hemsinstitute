@extends('layout.index')
@section('title')
Hem's Institute
@endsection
@section('content')

<!-- Home -->

<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Home Slider Item -->
            @foreach ($slider as $data)
            <div class="owl-item">
                <div class="home_slider_background"
                    style="background-image:url( {{ asset('images/slider/'.$data->img_slider) }} )"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                {{-- <div class="home_slider_title" style="color:white; font-size:20px;">
                                    {{ $data->sub_judul_slider }}</div>
                                <div class="home_slider_subtitle" style="color:white;">{{ $data->judul_slider }}</div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Home Slider Item -->
            {{-- <div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('frontend/images/home_slider_1.jpg') }})">
        </div>
        <div class="home_slider_content">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="home_slider_title">The Premium System Education</div>
                        <div class="home_slider_subtitle">Future Of Education Technology</div>
                        <div class="home_slider_form_container">
                            <form action="#" id="home_search_form_2"
                                class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                <div class="d-flex flex-row align-items-center justify-content-start">
                                    <input type="search" class="home_search_input" placeholder="Keyword Search"
                                        required="required">
                                    <select class="dropdown_item_select home_search_input">
                                        <option>Category Courses</option>
                                        <option>Category</option>
                                        <option>Category</option>
                                    </select>
                                    <select class="dropdown_item_select home_search_input">
                                        <option>Select Price Type</option>
                                        <option>Price Type</option>
                                        <option>Price Type</option>
                                    </select>
                                </div>
                                <button type="submit" class="home_search_button">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Home Slider Item -->
    {{-- <div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{ asset('frontend/images/home_slider_1.jpg') }})">
</div>
<div class="home_slider_content">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="home_slider_title">The Premium System Education</div>
                <div class="home_slider_subtitle">Future Of Education Technology</div>
                <div class="home_slider_form_container">
                    <form action="#" id="home_search_form_3"
                        class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                        <div class="d-flex flex-row align-items-center justify-content-start">
                            <input type="search" class="home_search_input" placeholder="Keyword Search"
                                required="required">
                            <select class="dropdown_item_select home_search_input">
                                <option>Category Courses</option>
                                <option>Category</option>
                                <option>Category</option>
                            </select>
                            <select class="dropdown_item_select home_search_input">
                                <option>Select Price Type</option>
                                <option>Price Type</option>
                                <option>Price Type</option>
                            </select>
                        </div>
                        <button type="submit" class="home_search_button">search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}

</div>
</div>

<!-- Home Slider Nav -->

<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>

<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Kenapa Memilih Kami?</h2>
                    <div class="section_subtitle">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum
                            feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row features_row">

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><i class="fa fa-briefcase" style="font-size:65px; color:#FF5B00;"></i>
                    </div>
                    <h3 class="feature_title">Berpengalaman</h3>
                    <div class="feature_text">
                        <p>Berpengalaman di dalam dunia pelatihan.</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><i class="fa fa-users" style="font-size:55px; color:#FF5B00;"></i></div>
                    <h3 class="feature_title">Instruktur Kompeten</h3>
                    <div class="feature_text">
                        <p>Instruktur kami selain praktisi juga memiliki jiwa mengajar.</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><i class="fa fa-book" style="font-size:65px; color:#FF5B00;"></i></div>
                    <h3 class="feature_title">Materi Pelatihan Yang Up To Date</h3>
                    <div class="feature_text">
                        <p>Materi selalu diperbaharui sesuai dengan perkembangan teknologi.</p>
                    </div>
                </div>
            </div>

            <!-- Features Item -->
            <div class="col-lg-3 feature_col">
                <div class="feature text-center trans_400">
                    <div class="feature_icon"><i class="fa fa-comments-o" style="font-size:65px; color:#FF5B00;"></i>
                    </div>
                    <h3 class="feature_title">Gratis Konsultasi</h3>
                    <div class="feature_text">
                        <p>Peserta pelatihan dapat berkonsultasi dengn instruktur.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Popular Courses -->

<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll"
        data-image-src="{{ asset('frontend/images/courses_background.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Paket Kami</h2>
                    <div class="section_subtitle">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum
                            feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row courses_row">

            <!-- Course -->
            @foreach ($paket as $data)
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="{{ asset('images/'.$data->gambar_kategori) }}" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="{{ route('kategori-program', $data->nama_kategori) }}">{{ $data->nama_kategori }}</a></h3>
                        {{-- <div class="course_teacher">Mr. John Taylor</div> --}}
                        {{-- <div class="course_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                        </div> --}}
                    </div>
                    {{-- <div class="course_footer">
                        <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                            <div class="course_info">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>20 Student</span>
                            </div>
                            <div class="course_info">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5 Ratings</span>
                            </div>
                            <div class="course_price ml-auto">$130</div>
                        </div>
                    </div> --}}
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="{{ route('program') }}">view all courses</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Counter -->

{{-- <div class="counter">
		<div class="counter_background" style="background-image:url({{ asset('frontend/images/counter_background.jpg') }})">
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="counter_content">
                <h2 class="counter_title">Register Now</h2>
                <div class="counter_text">
                    <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
                        standard dumy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>

                <!-- Milestones -->

                <div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">

                    <!-- Milestone -->
                    <div class="milestone">
                        <div class="milestone_counter" data-end-value="15">0</div>
                        <div class="milestone_text">years</div>
                    </div>

                    <!-- Milestone -->
                    <div class="milestone">
                        <div class="milestone_counter" data-end-value="120" data-sign-after="k">0</div>
                        <div class="milestone_text">years</div>
                    </div>

                    <!-- Milestone -->
                    <div class="milestone">
                        <div class="milestone_counter" data-end-value="670" data-sign-after="+">0</div>
                        <div class="milestone_text">years</div>
                    </div>

                    <!-- Milestone -->
                    <div class="milestone">
                        <div class="milestone_counter" data-end-value="320">0</div>
                        <div class="milestone_text">years</div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="counter_form">
        <div class="row fill_height">
            <div class="col fill_height">
                <form class="counter_form_content d-flex flex-column align-items-center justify-content-center"
                    action="#">
                    <div class="counter_form_title">courses now</div>
                    <input type="text" class="counter_input" placeholder="Your Name:" required="required">
                    <input type="tel" class="counter_input" placeholder="Phone:" required="required">
                    <select name="counter_select" id="counter_select" class="counter_input counter_options">
                        <option>Choose Subject</option>
                        <option>Subject</option>
                        <option>Subject</option>
                        <option>Subject</option>
                    </select>
                    <textarea class="counter_input counter_text_input" placeholder="Message:"
                        required="required"></textarea>
                    <button type="submit" class="counter_form_button">submit now</button>
                </form>
            </div>
        </div>
    </div>

</div>
</div> --}}

<!-- Galeri -->
<br><br>
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
        <br><br>
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

<!-- Events -->

<div class="events" style="background-image: url('{{ asset('frontend/images/courses_background.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Berita</h2>
                    <div class="section_subtitle">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum
                            feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row events_row">

            <!-- Event -->
			@foreach ($berita as $data)
            <div class="col-lg-4 event_col">
                <div class="event event_left">
                    <div class="event_image"><img src="{{ asset('images/berita/'.$data->gambar) }}" width="100%" height="300px" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">{{ date('d',strtotime($data->tgl_post)) }}</div>
                                <div class="event_month trans_200">{{ date('M',strtotime($data->tgl_post)) }}</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="{{ route('detail-berita',$data->slug) }}">{{ $data->judul }}</a></div>
                            <div class="event_info_container">
                                {{-- <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 -
                                        19.30</span></div> --}}
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Hem's Institute</span></div>
                                {{-- <div class="event_text">
                                    <p>{!! substr($data->isi,0,75) !!}...</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			@endforeach

        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background parallax-window" data-parallax="scroll" style="background-color:#FF5B00;" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div
                    class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start" sty>

                    <!-- Newsletter Content -->
                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">Daftar Sekarang Juga!</div>
                        <div class="newsletter_subtitle">
							{{-- Subcribe to lastest smartphones news & great deals we offer --}}
                        </div>
                    </div>

                    @php
                    $wa = DB::table('tb_kontak')
                    ->where('jenis_kontak', 'whatsapp')
                    ->first();
                    @endphp
                    <!-- Newsletter Form -->
                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="#" id="newsletter_form"
                            class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            {{-- <input type="email" class="newsletter_input" placeholder="Your Email" required="required"> --}}
                            <a href="https://api.whatsapp.com/send?phone={{ $wa->kontak }}" type="submit" class="btn btn-light btn-lg" style="color:#FF5B00; font-family: inherit;">Daftar Sekarang</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
