@extends('layout.index')
@section('title')
Program Hem's Institute
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/courses.css') }}">

	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Program</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							@foreach ($program as $data)
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="{{ asset('images/paket/' . $data->gambar) }}" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="{{ route('detail-program', $data->slug) }}">{{ $data->armada }}</a></h3>
										{{-- <div class="course_teacher">Mr. John Taylor</div> --}}
										{{-- <div class="course_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
										</div> --}}
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-list-alt" aria-hidden="true"></i>
												<span>{{ $data->nama_kategori }}</span>
											</div>
											{{-- <div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">$130</div> --}}
										</div>
									</div>
								</div>
							</div>
							@endforeach

						</div>
						{{-- <div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Kategori</div>
							<div class="sidebar_categories">
								<ul>
									@foreach ($kategori as $data)
									<li><a href="{{ route('kategori-program', $data->nama_kategori) }}">
										{{ $data->nama_kategori }}
									</a></li>
									@endforeach
								</ul>
							</div>
						</div>

					</div>
				</div>
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