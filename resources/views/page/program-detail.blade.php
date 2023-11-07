@extends('layout.index')
@section('title')
{{ $detail->armada }}
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/course.css') }}">
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
                            <li><a href="courses.html">Detail Program</a></li>
                            <li>{{ $detail->armada }}</li>
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
                    <div class="course_title">{{ $detail->armada }}</div>
                    {{-- <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <div class="course_info_title">Teacher:</div>
                            <div class="course_info_text"><a href="#">Jacke Masito</a></div>
                        </div>

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <div class="course_info_title">Reviews:</div>
                            <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                        </div>

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <div class="course_info_title">Categories:</div>
                            <div class="course_info_text"><a href="#">Languages</a></div>
                        </div>

                    </div> --}}

                    <!-- Course Image -->
                    <div class="course_image"><img src="{{ asset('images/paket/'.$detail->gambar) }}" alt=""></div>

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
                                {{-- <div class="tab_panel_title">{{ $detail->armada }}</div> --}}
                                <div class="tab_panel_content">
                                    <div class="tab_panel_text">
                                        <p>{!! $detail->isi !!}</p>
                                    </div>
                                    {{-- <div class="tab_panel_section">
                                        <div class="tab_panel_subtitle">Requirements</div>
                                        <ul class="tab_panel_bullets">
                                            <li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti
                                                sociosquad litora torquent.</li>
                                            <li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                                                odio tincidunt auctor a.</li>
                                            <li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                                                vitae erat consequat.</li>
                                            <li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                                                ornare odio.</li>
                                        </ul>
                                    </div>
                                    <div class="tab_panel_section">
                                        <div class="tab_panel_subtitle">What is the target audience?</div>
                                        <div class="tab_panel_text">
                                            <p>This course is intended for anyone interested in learning to master his
                                                or her own body.This course is aimed at beginners, so no previous
                                                experience with hand balancing skillts is necessary Aenean viverra
                                                tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium,
                                                consectetur leo at, congue quam. Nullam hendrerit porta ante vitae
                                                tristique. Vestibulum ante ipsum primis in faucibus orci luctus et
                                                ultrices posuere cubilia Curae.</p>
                                        </div>
                                    </div>
                                    <div class="tab_panel_faq">
                                        <div class="tab_panel_title">FAQ</div>

                                        <!-- Accordions -->
                                        <div class="accordions">

                                            <div class="elements_accordions">

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center">
                                                        <div>Can I just enroll in a single course?</div>
                                                    </div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean
                                                            sollicitudin, lorem quis bibendum auci elit consequat
                                                            ipsutis sem nibh id elit. Duis sed odio sit amet nibh
                                                            vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center active">
                                                        <div>I'm not interested in the entire Specialization?</div>
                                                    </div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean
                                                            sollicitudin, lorem quis bibendum auci elit consequat
                                                            ipsutis sem nibh id elit. Duis sed odio sit amet nibh
                                                            vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center">
                                                        <div>What is the refund policy?</div>
                                                    </div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean
                                                            sollicitudin, lorem quis bibendum auci elit consequat
                                                            ipsutis sem nibh id elit. Duis sed odio sit amet nibh
                                                            vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center">
                                                        <div>What background knowledge is necessary?</div>
                                                    </div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean
                                                            sollicitudin, lorem quis bibendum auci elit consequat
                                                            ipsutis sem nibh id elit. Duis sed odio sit amet nibh
                                                            vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center">
                                                        <div>Do i need to take the courses in a specific order?</div>
                                                    </div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean
                                                            sollicitudin, lorem quis bibendum auci elit consequat
                                                            ipsutis sem nibh id elit. Duis sed odio sit amet nibh
                                                            vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>
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
