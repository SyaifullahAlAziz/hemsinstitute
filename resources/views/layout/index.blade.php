<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/logo.jpeg') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link href="{{ asset('frontend/plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/floating-wpp.min.css') }}">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            @php
            $wa = DB::table('tb_kontak')
            ->where('jenis_kontak', 'whatsapp')
            ->first();
            $alamat = DB::table('tb_kontak')
            ->where('jenis_kontak', 'alamat')
            ->first();
            @endphp

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li>
                                            <div class="question">Have any questions?</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div>+{{ $wa->kontak }}</div>
                                        </li>
                                        {{-- <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <div>info.deercreative@gmail.com</div>
                                        </li> --}}
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <div class="login_button"><a href="https://api.whatsapp.com/send?phone={{ $wa->kontak }}">Daftar</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text"><img src="{{ asset('images/logo.jpeg') }}" width="28px" alt=""></div>
                                        <div class="logo_text" style="font-size:30px;">Hem's<span> Institute</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('profil') }}">Profil</a></li>
                                        <li><a href="{{ route('program') }}">Program</a></li>
                                        <li><a href="{{ route('galeri') }}">Galeri</a></li>
                                        <li><a href="{{ route('berita') }}">Berita</a></li>
                                        <li><a href="{{ route('kontak') }}">Kontak</a></li>
                                    </ul>
                                    {{-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> --}}

                                    <!-- Hamburger -->

                                    {{-- <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div> --}}
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            {{-- <div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			 --}}
        </header>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            {{-- <div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div> --}}
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="{{ route('home') }}">Home</a></li>
                    <li class="menu_mm"><a href="{{ route('profil') }}">Profil</a></li>
                    <li class="menu_mm"><a href="{{ route('program') }}">Program</a></li>
                    <li class="menu_mm"><a href="{{ route('galeri') }}">Galeri</a></li>
                    <li class="menu_mm"><a href="{{ route('berita') }}">Berita</a></li>
                    <li class="menu_mm"><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </nav>
        </div>

        @yield('content')

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_background"
                style="background-image:url({{ asset('frontend/images/footer_background.png') }})"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-4 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">Hem's<span> Institute</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>LKP Hem's Institute</p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/profile.php?id=100077980671904"><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="https://www.instagram.com/hems.institute/"><i
                                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="https://www.youtube.com/@hemsinstituteofficial2422"><i
                                                            class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

								<div class="col-lg-4 footer_col">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_links">
                                        <div class="footer_title">Quick Link</div>
                                        <div class="footer_links_container">
                                            <ul>
                                                <li><a href="{{ route('home') }}">Home</a></li>
                                                <li><a href="{{ route('profil') }}">Profil</a></li>
                                                <li><a href="{{ route('program') }}">Program</a></li>
                                                <li><a href="{{ route('galeri') }}">Galeri</a></li>
                                                <li><a href="{{ route('berita') }}">Berita</a></li>
                                                <li><a href="{{ route('kontak') }}">Kontak</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-4 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Whatsapp: +{{ $wa->kontak }}</li>
                                                <li>{{ $alamat->kontak }}</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                {{-- <div class="col-lg-3 footer_col clearfix">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_mobile">
                                        <div class="footer_title">Mobile</div>
                                        <div class="footer_mobile_content">
                                            <div class="footer_image"><a href="#"><img
                                                        src="{{ asset('frontend/images/mobile_1.png') }}" alt=""></a>
                                            </div>
                                            <div class="footer_image"><a href="#"><img
                                                        src="{{ asset('frontend/images/mobile_2.png') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright_row">
                    <div class="col">
                        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                            <div class="cr_text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy; CV. Mediatama Web Indonesia <script>
                                    document.write(new Date().getFullYear());

                                </script> | All rights reserved
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
                            <div id="myDiv"></div>
    
    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('frontend/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('frontend/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="{{ asset('frontend/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('frontend/js/about.js') }}"></script>

            @php
    $kontak = DB::table('tb_kontak')
    ->where('jenis_kontak', 'whatsapp')
    ->first();
    @endphp
    <script src="{{ asset('frontend/js/floating-wpp.min.js') }}"></script>
    <script type="text/javascript">
        $('#myDiv').floatingWhatsApp({
            phone: '{{ $kontak->kontak }}',
            popupMessage: 'Hello, ada yang bisa kami bantu?',
            showPopup: true,
            size: '55px'
        });

    </script>    

</body>

</html>
