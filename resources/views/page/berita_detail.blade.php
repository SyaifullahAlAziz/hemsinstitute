@extends('layout.index')
@section('title')
{{ $detail->judul }}
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/course.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/course_responsive.css') }}">
<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="courses.html">Berita</a></li>
								<li>{{ $detail->judul }}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						<div class="course_title">{{ $detail->judul }}</div>

						<!-- Course Image -->
						<div class="course_image"><img src="{{ asset('images/berita/'.$detail->gambar) }}" alt=""></div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							{{-- <div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">description</div>
								<div class="tab">curriculum</div>
								<div class="tab">reviews</div>
							</div> --}}
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									{{-- <div class="tab_panel_title">{{ $detail->judul }}</div> --}}
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>
                                                {!! $detail->isi !!}
                                            </p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Daftar Berita</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
                                @foreach($post as $data)
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="{{ asset('images/berita/'.$data->gambar) }}" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="{{ route('detail-berita',$data->slug) }}">{{ $data->judul }}</a></div>
										{{-- <div class="latest_price">Free</div> --}}
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

    @endsection

