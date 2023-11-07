@extends('layout.index')
@section('title')
Kontak
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/contact_responsive.css') }}">
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Kontak</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		<div class="contact_map">

			<!-- Google Map -->
			
			<div class="map">
				<div id="google_map" class="google_map">
					<div class="map_container">
						<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.297688512159!2d100.36609031400536!3d-0.9256166355983063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b911b9f4f3e5%3A0xe347c20e73eeae5f!2sHem&#39;s%20Institute!5e0!3m2!1sid!2sid!4v1675485475477!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>

		</div>

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Info -->
					<div class="col-lg-12">
						<div class="contact_info">
							<div class="contact_info_title">Hem's Institute</div>
							<div class="contact_info_text">
								<p>
                                    {{ $alamat->kontak }}
                                </p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Sosial Media</div>
								<ul class="location_list">
									<li><i class="fa fa-facebook"></i> {{ $facebook->kontak }}</li>
									<li><i class="fa fa-instagram"></i> {{ $instagram->kontak }}</li>
									<li><i class="fa fa-youtube"></i> {{ $youtube->kontak }}</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Kontak</div>
								<ul class="location_list">
									<li>+{{ $whatsapp->kontak }}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection